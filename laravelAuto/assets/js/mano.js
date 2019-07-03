var url = window.location;
jQuery('a[href="'+url+'"]').parent().addClass('active');

$('#createBtn').click(function(){
    $('#myModal').modal('show');
});

$('#deleteBtn').click(function(){
    $('#myModal2').modal('show');
});


