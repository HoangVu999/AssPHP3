$(document).ready(function(){
    $(".delete").click(function(e){
        e.preventDefault()
        swal({
            title: 'Bạn có chắc chắn muốn xóa?',
            text: "Bạn không thể khôi phục được dữ liệu sau khi xóa!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý'
          }, function(){
            window.location.href = e.target.href
          })
    })
})