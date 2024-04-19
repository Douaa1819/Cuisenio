

@foreach ($errors->all() as $error)

<script>
    swal({
        title: "Error",
        text: "{{ $error  }}",
        icon: "error",
        timer: 3000,
        buttons: false 
      
    });
</script>
@endforeach
