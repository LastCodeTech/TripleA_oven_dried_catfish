<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SimplePaystackService
{
    public function makePayment($amount, $customerEmail, $callbackUrl, $metadata = [])
    {
        try {
            $reference = 'PAY_' . uniqid() . '_' . time();
            
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.paystack.secret_key'),
                'Content-Type' => 'application/json',
            ])->post('https://api.paystack.co/transaction/initialize', [
                'email' => $customerEmail,
                'amount' => $amount * 100,
                'reference' => $reference,
                'callback_url' => $callbackUrl,
                'metadata' => $metadata,
            ]);
            
            $result = $response->json();
            
            if (!$response->successful() || !($result['status'] ?? false)) {
                return [
                    'success' => false,
                    'message' => $result['message'] ?? 'Payment failed',
                ];
            }
            
            return [
                'success' => true,
                'reference' => $reference,
                'authorization_url' => $result['data']['authorization_url'],
            ];
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Network error. Try again.',
            ];
        }
    }
    
    public function verifyPayment($reference)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.paystack.secret_key'),
            ])->get('https://api.paystack.co/transaction/verify/' . $reference);
            
            $result = $response->json();
            
            if (!$response->successful() || !($result['status'] ?? false)) {
                return [
                    'success' => false,
                    'message' => 'Verification failed',
                ];
            }
            
            $data = $result['data'];
            
            if ($data['status'] !== 'success') {
                return [
                    'success' => false,
                    'message' => 'Payment not completed',
                    'status' => $data['status'],
                ];
            }
            
            return [
                'success' => true,
                'status' => $data['status'],
                'reference' => $data['reference'],
                'amount' => $data['amount'] / 100,
                'metadata' => $data['metadata'] ?? [],
            ];
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Could not verify payment',
            ];
        }
    }
}