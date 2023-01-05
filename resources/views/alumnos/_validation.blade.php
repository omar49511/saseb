@if ($errors->any())
    <div>
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
            <span class="text-xl inline-block mr-5 align-middle">
                <i class="fas fa-bell"></i>
            </span>
            <span class="inline-block align-middle mr-8">
                Hubo un error, revisa los campos
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                <span>×</span>
            </button>
        </div>
    </div> 
@endif

<script>
  function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
</script>