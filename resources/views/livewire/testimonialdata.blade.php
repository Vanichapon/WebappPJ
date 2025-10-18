<div>
    <section id="testimonials">
    <h2>รีวิวจากลูกค้า</h2>
    <div class="testimonials">
        @foreach($testimonials as $t)
            <div class="testimonial-item">
                <img src="{{ asset('images/' . $t->image) }}" alt="{{ $t->name }}">
                <h3>{{ $t->name }}</h3>
                <p>"{{ $t->comment }}"</p>
                <span>คะแนน: {{ $t->rating }}/5</span>
            </div>
        @endforeach
    </div>
</section>

</div>
