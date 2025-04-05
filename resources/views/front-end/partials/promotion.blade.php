{{-- <form action="{{ route('promotion')}}" method="post">
    @csrf
    <input type="datetime-local" class="form-control" name="date_promotion">
    <br>
    <input type="submit" class="btn btn-dark" value="Promotion">
</form> --}}
<div class="countdown">
    <div class="countdown-item">
      <h5 id="day">-</h5>
      <span>Day</span>
    </div>
  
    <div class="countdown-item">
      <h5 id="hour">-</h5>
      <span>Hour</span>
    </div>
  
    <div class="countdown-item">
      <h5 id="minute">-</h5>
      <span>Minute</span>
    </div>
  
    <div class="countdown-item">
      <h5 id="second">-</h5>
      <span>Second</span>
    </div>
    
</div>