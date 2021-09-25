<script>
// Delete Comment
$(".comment-delete").on('click', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Are you sure!",
                buttons: [true, "Delete"],
            }).then((willDelete) => {
                if (willDelete) {

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        url: "{{ route('admin.comment.delete') }}",
                        data: {id:id},
                        success: function(data) {
                     
                            window.location.reload();
                        
                        }
                    });
                } else {
                    
                }
            });;


        });
//end
</script>