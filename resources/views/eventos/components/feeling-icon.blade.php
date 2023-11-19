@switch($data->feeling_id)
    @case(1)
        <center><i class="fa-solid fa-face-smile-beam fa-2x" style="color: #65d2c6;"></i></center>
    @break
    @case(2)
        <center><i class="fa-solid fa-face-smile fa-2x" style="color: #65d2c6;"></i></center>
    @break
    @case(3)
        <center><i class="fa-solid fa-face-meh-blank fa-2x" style="color: #65d2c6;"></i></center>
    @break
    @case(4)
        <center><i class="fa-solid fa-face-sad-tear fa-2x" style="color: #65d2c6;"></i></center>
    @break
    @default
        <center><i class="fa-solid fa-face-angry fa-2x" style="color: #65d2c6;"></i></center>
@endswitch
