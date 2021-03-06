<link href="{{ asset('fiture-style/select2/select2.min.css') }}" rel="stylesheet">
<form id="jxForm" novalidate="novalidate" method="POST" action="{{ route('payment-method.index') }}">
  <div class="modal-header"><h4 class="modal-title">Create New Payment Method</h4>
  </div>
  <div class="modal-body">
      {{ csrf_field() }}
        <div class="form-group">
          <label class="col-form-label" for="type">*Type</label>
          <select id="type" name="type" class="form-control" aria-describedby="type-error" style="width: 100%;" required>
            <option value=""></option>
            <option value="ATM Transfer">ATM Transfer</option>
            <option value="Payment Gateway">Payment Gateway</option>
          </select>
          <em id="type-error" class="error invalid-feedback">Please enter a new type</em>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="name">*Name Bank</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" 
              aria-describedby="name-error">
            <em id="name-error" class="error invalid-feedback">Please enter a name carriers</em>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="norek">*No Rekening</label>
                <input type="number" class="form-control" id="norek" name="norek" aria-describedby="norek-error" required>
            <em id="norek-error" class="error invalid-feedback">Please enter a no rekening</em>
        </div>
  </div>
  <div class="modal-footer">
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add New</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</form>

<script src="{{ asset('fiture-style/select2/select2.min.js') }}"></script>

<script>
  $('#notification').select2({theme:"bootstrap", placeholder:'Please select'});
  $('#type').select2({theme:"bootstrap", placeholder:'Please select'});
  $('#type').on('change', function(){
    $(this).addClass('is-valid').removeClass('is-invalid');
  });
  $('#jxForm').validate({
    rules:{
      name:{required:true,minlength:2},
      norek:{required:true},
      delivery:{required:true,minlength:2},
    },
    messages:{
      name:{
        required:'Please enter a name carriers',
        minlength:'Name must consist of at least 2 characters'
      },
      norek:{
        required:'Please select a prices'
      }, 
      delivery:{
        required:'Please enter a delivery',
        minlength:'Name must consist of at least 2 characters'
      }
    },
    errorElement:'em',
    errorPlacement:function(error,element){
      error.addClass('invalid-feedback');
    },
    highlight:function(element,errorClass,validClass){
      $(element).addClass('is-invalid').removeClass('is-valid');
    },
    unhighlight:function(element,errorClass,validClass){
      $(element).addClass('is-valid').removeClass('is-invalid');
    }
  });
</script>