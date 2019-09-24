<?php
/**
 * @var string $title
 */
?>

<div class="card unit_tests mt-4">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">

        <div class="code">
            @yield('code')
        </div>

        <div class="tests">
            @yield('tests')
        </div>

        <div class="results">
            @yield('results')
        </div>

    </div>
</div>



