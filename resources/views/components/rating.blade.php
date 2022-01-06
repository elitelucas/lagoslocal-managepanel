<?php
if (!isset($color)) {
    $color = '#ff7600';
}
if (!isset($starsize)) {
    $starsize = 16;
}
if (!isset($rating)) {
    $rating = 5;
}
if (!isset($scoreshow)) {
    $scoreshow = true;
}
// defined variables
$bar_rating = round($rating * 2) / 2;

?>
<div class="rating ms-auto">
    @for ($i = 0; $i < 5; $i++)
        @if ($bar_rating >= $i + 1)
            <i class="fas fa-star review-star" style="color:{{ $color }}; font-size:{{ $starsize }}px;"></i>
        @elseif($bar_rating >$i)
            <i class="fas fa-star-half-alt review-star" style="color:{{ $color }}; font-size:{{ $starsize }}px;"></i>
        @else
            <i class="far fa-star review-star" style="color:{{ $color }}; font-size:{{ $starsize }}px;"></i>
        @endif
    @endfor
    @if ($scoreshow)
        <span
            style="color: #323232; font-weight:bold; font-size: {{ $starsize * 0.8 }}px">{{ round($rating * 10) / 10 }}
        </span>
        <span style="color: #939393;  font-size: {{ $starsize * 0.5 }}px">/ 5</span>
    @endif

</div>
