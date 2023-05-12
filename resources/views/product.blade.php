<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap.min.css')}}">
    <title>Document</title>
    @livewireStyles
</head>
<body>
@livewire('product')
    @livewireScripts
    <script src="{{ URL::asset('bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('jquery-3.6.4.min.js') }}"></script>
    <script>

$('#button').click(function(){
$('#exampleModal').modal('hide')
});
$('.button_update').click(function (){


    $('#exampleModal2').modal('hide')
})
$('#button_delete').click(function(){


$('#staticBackdrop').modal('hide');
});
//   $(document).ready(function() {
//     $(".edit").click(function() {
//       var id = $(this).data("id");
//       var name = $(this).data("name");
//       var price = $(this).data("price");
//       var catogery_id = $(this).data("catogery_id");
//       $('#id_product').val(id)
//       $('#name').val(name)
//       $('#price').val(price)
//       $('#catogery_id').val(catogery_id)

//     });
//   });
</script>
</body>
</html>
