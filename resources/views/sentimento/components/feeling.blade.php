<div class="row emotions">
    <div class="col-md">
        <button class="emotion-btn" onclick="selectEmotion(1, 'Em paz')" type="button">
            <i class="fa-solid fa-face-smile-beam fa-2x" style="color: #9c62aa;"></i>
            <p>Em paz</p>
        </button>
    </div>
    <div class="col-md">
        <button class="emotion-btn" onclick="selectEmotion(2, 'Feliz')" type="button">
            <i class="fa-solid fa-face-smile fa-2x" style="color: #9c62aa;"></i>
            <p>Feliz</p>
        </button>
    </div>
    <div class="col-md">
        <button class="emotion-btn" onclick="selectEmotion(3, 'Neutro')">
            <i class="fa-solid fa-face-meh-blank fa-2x" style="color: #9c62aa;"></i>
            <p>Neutro</p>
        </button>
    </div>
    <div class="col-md">
        <button class="emotion-btn" onclick="selectEmotion(4, 'Triste')" type="button">
            <i class="fa-solid fa-face-sad-tear fa-2x" style="color: #9c62aa;"></i>
            <p>Triste</p>
        </button>
    </div>
    <div class="col-md">
        <button class="emotion-btn" onclick="selectEmotion(5, 'Raiva')" type="button">
            <i class="fa-solid fa-face-angry fa-2x" style="color: #9c62aa;"></i>
            <p>Raiva</p>
        </button>
    </div>
</div>
<input type="hidden" name="feeling" id="feeling" value="">
<script src="{{ asset('assets/js/feelings.js') }}"></script>
