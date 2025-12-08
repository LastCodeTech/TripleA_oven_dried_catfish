@if(session()->has('message'))
<div class='flex justify-between '>
  <div></div>
    <div class="bg-green-300 py-2 border-2 border-green-800 my-1 px-2 rounded-xl toast_container">
     <h2 class='text-xl'>{{session('message')}}</h2>
    </div>
</div>
@endif

@if(session()->has('error'))
<div class='flex justify-between '>
  <div></div>
  <div class="bg-red-300 py-2 border-2 border-red-800 my-1 px-2 rounded-xl toast_container">
     <h2 class='text-xl'>{{session('error')}}</h2>
    </div>
</div>
@endif




<script>
    let close_btn = document.querySelector('.close-btn');
    let toast_container = document.querySelector('.toast_container');
    
    // close_btn.addEventListener('click',function(){
    //     alert('hello');
    //     toast_container.classList.add('hidden');
    // })
    setTimeout(() => {
        toast_container.classList.add('hidden');
    }, 3000);
</script>

