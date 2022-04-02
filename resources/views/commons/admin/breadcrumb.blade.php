<div class="page-breadcrumb mb-3">
    <div class="row">
        <div class="col align-self-center">
            <h4 class="page-title">{{ $title }}</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item " aria-current="page">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        @foreach($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item {{ $breadcrumb['class'] }}" aria-current="page">
                                @if($breadcrumb['url'])
                                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                                @else
                                    {{ $breadcrumb['name'] }}
                                @endif
                            </li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
