$(document).ready(function() {
    $('select[name="district"]').on('change', function() {
        var distID = $(this).val();
        if(distID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/city/ajax/'+distID,
                type: "GET",
                dataType: "json",
                success:function(data) {
console.log(data);

                    $('select[name="city"]').empty();
                    $('select[name="city"]').append('<option value="0">-- Select district --</option>');
                    $.each(data, function(key, value) {
                        $('select[name="city"]').append('<option value="'+ value.city_id +'">'+ value.city_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="city"]').empty();
        }
    });
});