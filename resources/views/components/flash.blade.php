@if (session('success'))
<div id="success-message"
    class="bg-green-100 text-green-800 px-4 py-4 rounded fixed right-24 w-[50%]  top-50 z-50 text-sm sm:inline-block max-sm:block"
    role="alert">
    <strong class="font-bold text-base mr-4">Succès!</strong>
    <span class="block text-sm sm:inline max-sm:mt-1">{{ session('success') }}</span>
</div>
<script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 3000);
</script>
@endif


@if ($errors->any())
<div class="bg-red-100 text-red-800 px-4 py-4 rounded fixed right-24 w-[30%] top-50 z-50 text-sm sm:inline-block max-sm:block"
    role="alert">
    <strong class="font-bold text-base mr-4">Erreur!</strong>
    @foreach ($errors->all() as $error)
        <span class="block text-sm sm:inline max-sm:mt-1">{{ $error }}</span><br>
    @endforeach
</div>
<script>
    setTimeout(function() {
        document.getElementById('error-message').style.display = 'none';
    }, 2000);
</script>
@endif