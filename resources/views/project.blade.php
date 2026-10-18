<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="description" content="{{ $project['summary'] }}"><title>{{ $project['title'] }} | Vince M. Ybañez</title><link rel="stylesheet" href="{{ asset('css/portfolio.css') }}"><script src="{{ asset('js/portfolio.js') }}" defer></script></head><body><header class="site-header"><div class="wrap nav"><a class="logo" href="{{ route('home') }}">VMY<span>.</span></a><nav aria-label="Project navigation"><a href="{{ route('home') }}#projects">← All projects</a><button class="theme-toggle" id="theme-toggle" type="button" aria-label="Switch color theme">☀</button></nav></div></header><main><section class="section wrap project-detail"><div class="section-tag reveal">PROJECT / {{ strtoupper($project['type']) }}</div><h1 class="reveal">{{ $project['title'] }}</h1><p class="lead reveal">{{ $project['summary'] }}</p>
@if($project['image'])
<img class="detail-image reveal" src="{{ asset($project['image']) }}" alt="Screenshot of {{ $project['title'] }}">
@else
<div class="preview-mock detail-preview preview-{{ $project['slug'] }} reveal"><div class="preview-topline"><span class="preview-dots">● ● ●</span><span class="preview-address">{{ $project['slug'] }} / concept preview</span></div><div class="preview-content"><div class="preview-sidebar"><i></i><i></i><i></i><i></i></div><div class="preview-workspace"><div class="preview-label">{{ $project['title'] }}</div><div class="preview-panels"><span></span><span></span><span></span></div><div class="preview-bars"><b></b><b></b><b></b></div></div></div><small>Illustrative layout only — replace with actual project screenshot</small></div>
@endif
 
@if(!empty($project['gallery']))
<div class="gallery" aria-label="Project screenshots">
@foreach($project['gallery'] as $index => $image)
<button class="gallery-thumb" type="button" data-gallery-image="{{ asset($image) }}" data-gallery-alt="{{ $project['title'] }} screenshot {{ $index + 1 }}" aria-label="Enlarge screenshot {{ $index + 1 }}"><img src="{{ asset($image) }}" alt="{{ $project['title'] }} screenshot {{ $index + 1 }}" loading="lazy"></button>
@endforeach
</div>
@else
<p class="gallery-note reveal">Project screenshots will be added here as they become available.</p>
@endif
<div class="panel reveal"><h2>Overview</h2><p>{{ $project['details'] }}</p><h3>Technologies and features</h3><div class="tags">
@foreach($project['stack'] as $tag)
<span>{{ $tag }}</span>
@endforeach
</div><div class="actions">
@if($project['live_url'])
<a class="btn primary" href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer">Visit live project ↗</a>
@endif

@if($project['repo_url'])
<a class="btn outline" href="{{ $project['repo_url'] }}" target="_blank" rel="noopener noreferrer">View repository ↗</a>
@endif
</div></div><div class="actions"><a class="btn outline" href="{{ route('home') }}#projects">← Back to all projects</a></div></section></main><footer class="wrap"><span>© {{ date('Y') }} Vince M. Ybañez</span><span>Built with Laravel</span></footer><dialog class="image-dialog" id="image-dialog" aria-label="Project image preview"><button class="dialog-close" type="button" id="dialog-close" aria-label="Close image">✕</button><img id="dialog-image" alt=""></dialog></body></html>
