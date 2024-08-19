<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>SB Admin - Dashboard</title>
  <!-- Admin Favicon Icon -->
  <link rel="icon" type="text/icon" href="{{ asset('public/admin.png') }}">

  
  <!-- Custom fonts for this template-->
  <link href="{{ asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('public/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Summer Note -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('public/css/sb-admin.css')}}" rel="stylesheet">
  <style>
    li.nav-item.active {
        background: #343a40;
    }
  </style>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{route('index')}}">Financial Markets Club</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <span class="badge badge-danger">9+</span>
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
  </div>
</li>
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-envelope fa-fw"></i>
      <span class="badge badge-danger">7</span>
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
  </div>
</li>
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @if(Auth::user()->image == 'default.png')
          <img src="{{ asset('public/uploads/default.png') }}" width="20" height="20" style="border-radius: 50%;" alt="Profile Image">
      @elseif(Auth::user()->image == '')
        <img src="{{ asset('public/uploads/default.png') }}" width="20" height="20" style="border-radius: 50%;" alt="Profile Image">
      @else
        <img src="{{ asset('public/uploads/users/'.Auth::user()->image) }}" width="20" height="20" style="border-radius: 50%">
      @endif
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

      <a class="dropdown-item {{ Request::is('admin/profile')? 'active': '' }}" href="{{ route('admin.profile') }}">
        @if(Auth::user()->image == 'default.png')
          <img src="{{ asset('public/uploads/default.png') }}" width="25" height="25" style="border-radius: 50%;" alt="Profile Image">
        @elseif(Auth::user()->image == '')
          <img src="{{ asset('public/uploads/default.png') }}" width="25" height="25" style="border-radius: 50%;" alt="Profile Image">
        @else
          <img src="{{ asset('public/uploads/users/'.Auth::user()->image) }}" width="25" height="25" style="border-radius: 50%">
        @endif
        
        {{ Auth::user()->name }}
      </a>
      <a class="dropdown-item {{ Request::is('admin/account-settings')? 'active': '' }}" href="{{ route('admin.account') }}"><i class="fas fa-user-cog"></i> Account Settings</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>
</li>
</ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

      <li class="nav-item {{ Request::is('dashboard')? 'active': '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-shield"></i>
          <span>Admin</span>
      </a>

      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item {{ Request::is('admin/admins')? 'active': '' }}" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Admins</span>
        </a>

        <a class="dropdown-item {{ Request::is('admin/admin/create')? 'active': '' }}" href="{{route('admin.create')}}">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Add Admin</span>
        </a>
    </div>
</li>

    <li class="nav-item {{ Request::is('admin/users')? 'active': '' }}">
        <a class="nav-link" href="{{ route('admin.users') }}">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span>
        </a>
      </li>

    <li class="nav-item {{ Request::is('admin/affiliators*')? 'active': '' }}">
      <a class="nav-link" href="{{ route('admin.affiliators.index') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Affiliates</span>
      </a>
    </li>





<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-rss"></i>
      <span>Signals</span>
  </a>

  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         <a class="dropdown-item {{ Request::is('admin/signal')? 'active': '' }}" href="{{ url('admin/signal') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>All Signals</span>
        </a>

        <a class="dropdown-item {{ Request::is('admin/signal/create')? 'active': '' }}" href="{{route('signal.create')}}">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Add Signals</span>
        </a>
        
         <a class="dropdown-item {{ Request::is('admin/signal/registered-user')? 'active': '' }}" href="{{ url('signal/registeredUser') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Reg. Users</span>
        </a>
        
         <a class="dropdown-item {{ Request::is('admin/signal/all-emails')? 'active': '' }}" href="{{ url('signal/all-emails') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Emails</span>
        </a>
    
    </div>
</li>


      <!-- <li class="nav-item {{ Request::is('product')? 'active': '' }}">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Products</span></a>
      </li> -->

      <!-- <li class="nav-item {{ Request::is('product/add')? 'active': '' }}">
        <a class="nav-link" href="{{ route('product.add') }}">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Add Products</span></a>
      </li> -->

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-cube"></i>
          <span>Post Category</span>
      </a>

      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item {{ Request::is('admin/category')? 'active': '' }}" href="{{ route('category.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Categories</span>
        </a>

        <a class="dropdown-item {{ Request::is('admin/category/create')? 'active': '' }}" href="{{route('category.create')}}">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Add Category</span>
        </a>

    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-rss"></i>
      <span>Posts</span>
  </a>

  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item {{ Request::is('admin/view-post')? 'active': '' }}" href="{{ route('postdelete') }}">
        <i class="fas fa-fw fa-list"></i>
        <span>All Post</span>
    </a>

    <a class="dropdown-item {{ Request::is('admin/insert')? 'active': '' }}" href="{{route('postshow')}}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Add Post</span>
    </a>

</div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Trader Category</span>
  </a>

  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item {{ Request::is('admin/trader-category')? 'active': '' }}" href="{{ route('trader-category.index') }}">
        <i class="fas fa-fw fa-list"></i>
        <span>Categories</span>
    </a>

    <a class="dropdown-item {{ Request::is('admin/trader-category/create')? 'active': '' }}" href="{{route('trader-category.create')}}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Add Category</span>
    </a>

</div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-fw fa-cart-plus"></i>
      <span>Trader Post</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item {{ Request::is('admin/view-trader-post')? 'active': '' }}" href="{{ route('traderpost') }}">
        <i class="fas fa-fw fa-list"></i>
        <span>All Trader Post</span>
    </a>

    <a class="dropdown-item {{ Request::is('admin/trader-post/insert')? 'active': '' }}" href="{{route('traderadd')}}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Add Trader Post</span>
    </a>
</div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-file"></i>
      <span>Forum Category</span>
  </a>

  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item {{ Request::is('admin/forum-category')? 'active': '' }}" href="{{ route('forum-category.index') }}">
        <i class="fas fa-fw fa-list"></i>
        <span>Categories</span>
    </a>

    <a class="dropdown-item {{ Request::is('admin/forum-category/create')? 'active': '' }}" href="{{route('forum-category.create')}}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Add Category</span>
    </a>

</div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-fw fa-comment-alt"></i>
      <span>Forum Post</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item {{ Request::is('admin/view-forum-post')? 'active': '' }}" href="{{ route('forumpost') }}">
        <i class="fas fa-fw fa-list"></i>
        <span>All Forum Post</span>
    </a>

    <a class="dropdown-item {{ Request::is('admin/forum-post/insert')? 'active': '' }}" href="{{route('forumadd')}}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Add Forum Post</span>
    </a>
</div>
</li>

      <!-- <li class="nav-item {{ Request::is('admin/view-trader-post')? 'active': '' }}">
        <a class="nav-link" href="{{ route('traderpost') }}">
          <i class="fas fa-fw fa-list"></i>
          <span>All Trader Post</span></a>
      </li>
      <li class="nav-item {{ Request::is('admin/trader-post/insert')? 'active': '' }}">
        <a class="nav-link" href="{{route('traderadd')}}">
          <i class="fas fa-fw fa-plus-circle"></i>
          <span>Add Trader Post</span></a>
      </li> -->


      <li class="nav-item {{ Request::is('admin/comments')? 'active': '' }}">
        <a class="nav-link" href="{{ route('comment.index') }}">
          <i class="fas fa-fw fa-comments"></i>
          <span>Blog Comments</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/trader-comments')? 'active': '' }}">
        <a class="nav-link" href="{{ route('trader_comment.index') }}">
          <i class="fas fa-fw fa-comments-dollar"></i>
          <span>Trader Blog Comments</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/forum-comments')? 'active': '' }}">
        <a class="nav-link" href="{{ route('forum_comment.index') }}">
          <i class="fas fa-fw fa-comment-dots"></i>
          <span>Forum Comments</span></a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-question-circle"></i>
          <span>FAQ Post</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item {{ Request::is('admin/faqs')? 'active': '' }}" href="{{ route('faqs.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>All FAQ Post</span>
        </a>

        <a class="dropdown-item {{ Request::is('admin/faqs/create')? 'active': '' }}" href="{{ route('faqs.create') }}">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Add FAQ Post</span>
        </a>
    </div>
</li>

      <!-- <li class="nav-item {{ Request::is('admin/faqs')? 'active': '' }}">
        <a class="nav-link" href="{{ route('faqs.index') }}">
          <i class="fas fa-fw fa-list"></i>
          <span>All Faqs</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/faqs/create')? 'active': '' }}">
        <a class="nav-link" href="{{ route('faqs.create') }}">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>Add Faqs</span></a>
      </li> -->

      <li class="nav-item {{ Request::is('admin/contact')? 'active': '' }}">
        <a class="nav-link" href="{{ route('contact.view') }}">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Contact Message</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/subscriber')? 'active': '' }}">
        <a class="nav-link" href="{{ route('subscriber.view') }}">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Subscriber</span></a>
      </li>

	   <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">
          <i class="fas fa-fw fa-home"></i>
          <span>Home Page</span></a>
      </li> -->

  </ul>


  <div id="content-wrapper">

      @yield('content')

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © {{ config('app.name') }} <?php echo date('Y');?>
              <script type="text/javascript">
            // <!--    document.write(new Date().getFullYear());-->
            </script>
        </span>
    </div>
</div>
</footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      @if(Auth::check())
      <a class="btn btn-primary" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"
      >
      Logout
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
  @endif
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('public/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

<script type="text/javascript">
    var t2 = $('#dataTable2').DataTable({

    });
    window.setInterval(function(){
        $.ajax({
          url: 'http://anthony.myprivatelandlord.com/public/live-product2-data',
          type: 'GET',
          dataType: 'json',
          success: function (result) {
            $.each( result, function( key, value ) {
              var temp = t2.row(key).data();

              var str = value.price_change_percent;
              var str2 = str.replace(/[^0-9.%-]/g, "");

              if(value.status=='down'){

                temp[3] = '<i class="fa fa-arrow-down" style="color: #B00"></i> '+value.current_price;
                temp[4] = '<p style="color: #B00">'+value.price_change_amount+'</p>';
                temp[5] =  '<p style="color: #B00">'+str2+'</p>'; 
            }else if(value.status=='up'){

             temp[3] = '<i class="fa fa-arrow-up" style="color: #071"></i> '+value.current_price;
             temp[4] = '<p style="color: #071">'+value.price_change_amount+'</p>';
             temp[5] = '<p style="color: #071">'+str2+'</p>'; 
         }else{

          temp[3] = value.current_price;
          temp[4] = value.price_change_amount;
          temp[5] = str2;              
      }
             // temp[2] = value.current_price;

             t2.row(key).data(temp).draw(false);
         });
        }
    });
    }, 5000);
</script>

<script>
    $('.sendemail').click(function() {
      $this   = $(this);
      $('#sendmail_modal').modal('show');
      $id =  $this.data('id');
      $name =  $this.data('name');
      $email =  $this.data('email');
      $('#recipient_email').val($email);
      $('#user_uid').val($id);
      $('#username').html($name);
    });
</script>
<script>
    $('.sendWhatsapp').click(function() {
      $this   = $(this);
      $('#whatsapp_modal').modal('show');
      $id =  $this.data('id');
      $name =  $this.data('name');
      $number = $this.data('number');
    //   alert($number);
    //   $('#recipient_email').val($email);
    //   $('#user_uid').val($id);
      $('#whatsapp_username').html($name);
      $('#customer_whatsapp_number').val($number);
      $("#client_whatsapp_number").attr("href", "https://api.whatsapp.com/send?phone="+$number+"&amp;text=I%27m+interested+in+your+services");
    });
    
    $('#customer_whatsapp_number').keyup(function(e){
        e.preventDefault();
        
        var newNumber = $('#customer_whatsapp_number').val();
        // alert(newNumber);
        $("#client_whatsapp_number").attr("href", "https://api.whatsapp.com/send?phone="+newNumber+"&amp;text=I%27m+interested+in+your+services");
        // console.log('https://api.whatsapp.com/send?phone='+newNumber+'&amp;text=I%27m+interested+in+your+services')
    })
    
</script>

<script>
    $(document).on('change', '#vendorsub', function() {
      var mailbody = $(this).find("option:selected").data('msg');
      var mailsub = $(this).find("option:selected").data('subjct');
    //   $('.message_text').val(mailbody);
    $(".message_text").summernote('code',mailbody);
      $('#recipient_name').val(mailsub);
    });
</script>


<script type="text/javascript">

     $('.aldcheck').click(function() {
        $this   = $(this);
          
        var allVals = [];  
        $(".sub_chk:checked").each(function() {  
            allVals.push($(this).attr('data-id'));
        });  
        
        if(allVals.length <=0)  
        {  
            $("#delete_form").hide("");
            $("#no_data").show("");
            
        }else{
            
            $("#delete_form").show("");
            $("#no_data").hide("");
            
        }
        
        $('#aldcheck_modal').modal('show');
    });
    
    
    $(document).ready(function () {
        
        $('#master').on('click', function(e) {
            if($(this).is(':checked',true))  
            {
                $(".sub_chk").prop('checked', true);  
            } else {  
                $(".sub_chk").prop('checked',false);  
            }  
        });
            
        $('.delete_all').on('click', function(e) {
            
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
            // console.log(allVals);

            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  

                    var join_selected_values = allVals.join(","); 

                    $.ajax({
                        url: $(this).data('url'),
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        message: function (data) {
                            if (data['message']) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                            // loction.reload();
                        },
                        error: function (data) {
                            alert(data.responseText);
                            
                        }
                    });

                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
            }  
        });
        
    });
</script>


<script>
    var modal=document.getElementById("modalw");
    var modalImage=document.getElementById("modal-image");
    
    function showme(src){
     modal.style.display="block";
     modalImage.src=src;
    }
    
    // document.getElementById("close").onclick=function(){
    //  modal.style.display="none";
    // }
</script>


<!-- Custom scripts for all pages-->
<script src="{{ asset('public/js/sb-admin.min.js') }}"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('public/vendor/datatables/datatables-demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/vendor/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/vendor/tinymce/init-tinymce.js') }}"></script>
<!-- Summer Note -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote

      });
      
      
    //   $("#deleteAllSubs").click(function(e){
    //     e.preventDefault();
        
    //     var subscribers = $('.sub_chk').val();
    //     console.log(subscribers);
      
          
    //   });
      
    });
</script>
@yield('scripts')
</body>

</html>
