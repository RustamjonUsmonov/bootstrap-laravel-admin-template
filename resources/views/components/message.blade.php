<div class="container mt-2">
    @if(session()->has('message'))
        <div class="alert alert-success">
            <div class="alert-icon">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
            </div>
            <div class="alert-content">
                <div class="alert-title">
                    Success
                </div>
                <div class="alert-description">
                    {{ session()->get('message') }}
                </div>
            </div>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <div class="alert-icon">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
            </div>
            <div class="alert-content">
                <div class="alert-title">
                    Error
                </div>
                <div class="alert-description">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    @endif
    @if (session('status'))
        <div class="alert alert-blue">
            <div class="alert-icon">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
            </div>
            <div class="alert-content">
                <div class="alert-title">
                    Message
                </div>
                <div class="alert-description">
                    {{ session('status') }}
                </div>
            </div>
        </div>
@endif
<!--<div class="alert alert-warning">
        <div class="alert-icon">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content">
            <div class="alert-title">
                Custom
            </div>
            <div class="alert-description">
            You are logged in!
            </div>
        </div>
    </div>
    <div class="alert alert-grey">
        <div class="alert-icon">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content">
            <div class="alert-title">
                Custom
            </div>
            <div class="alert-description">
            You are logged in!
            </div>
        </div>
    </div>
    <div class="alert alert-danger">
        <div class="alert-icon">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content">
            <div class="alert-title">
                Custom
            </div>
            <div class="alert-description">
            You are logged in!
            </div>
        </div>
    </div>-->
</div>
<style>
    .alert {
        padding: 1.25rem;
        border-radius: 0.25rem;
    }

    .alert-icon {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .alert-icon span {
        display: block;
    }

    .alert-icon svg {
        width: 1.5rem;
        height: 1.5rem;
    }

    .alert-content {
        margin-left: 1rem;
    }

    .alert-title {
        font-weight: 600;
        font-size: 1.125rem;
        line-height: 1.75rem;
    }

    .alert-description {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .alert {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .alert.alert-blue {
        background-color: #bfdbfe;
        border-bottom: 2px solid #93c5fd;
    }

    .alert.alert-blue .alert-icon {
        border: 2px solid #3b82f6;
        background-color: #dbeafe;
    }

    .alert.alert-blue .alert-icon span {
        color: #3b82f6;
    }

    .alert.alert-blue .alert-title {
        color: #1e40af;
    }

    .alert.alert-blue .alert-description {
        color: #2563eb;
    }

    .alert.alert-warning {
        background-color: #fde68a;
        border-bottom: 2px solid #fcd34d;
    }

    .alert.alert-warning:hover {
        background-color: #fcd34d;
    }

    .alert.alert-warning .alert-icon {
        border: 2px solid #f59e0b;
        background-color: #fef3c7;
    }

    .alert.alert-warning .alert-icon span {
        color: #f59e0b;
    }

    .alert.alert-warning .alert-title {
        color: #92400e;
    }

    .alert.alert-warning .alert-description {
        color: #d97706;
    }

    .alert.alert-grey {
        background-color: #e5e7eb;
        border-bottom: 2px solid #d1d5db;
    }

    .alert.alert-grey:hover {
        background-color: #d1d5db;
    }

    .alert.alert-grey .alert-icon {
        border: 2px solid #6b7280;
        background-color: #f3f4f6;
    }

    .alert.alert-grey .alert-icon span {
        color: #6b7280;
    }

    .alert.alert-grey .alert-title {
        color: #1f2937;
    }

    .alert.alert-grey .alert-description {
        color: #4b5563;
    }

    .alert.alert-danger {
        background-color: #fecaca;
        border-bottom: 2px solid #fca5a5;
    }

    .alert.alert-danger:hover {
        background-color: #fca5a5;
    }

    .alert.alert-danger .alert-icon {
        border: 2px solid #ef4444;
        background-color: #fee2e2;
    }

    .alert.alert-danger .alert-icon span {
        color: #ef4444;
    }

    .alert.alert-danger .alert-title {
        color: #991b1b;
    }

    .alert.alert-danger .alert-description {
        color: #dc2626;
    }

    .alert.alert-success {
        background-color: #8AFFA5;
        border-bottom: 2px solid #33EA5E;
    }

    .alert.alert-success:hover {
        background-color: #43f76d;
    }

    .alert.alert-success .alert-icon {
        border: 2px solid #1A752F;
        background-color: #cdf7d7;
    }

    .alert.alert-success .alert-icon span {
        color: #1A752F;
    }

    .alert.alert-success .alert-title {
        color: #1A752F;
    }

    .alert.alert-success .alert-description {
        color: #229D3F;
    }

    .hide {
        display: none;
    }
</style>
<script>
    // if (typeof successAlert !== 'undefined') {
    setTimeout(() => {
        const alert = document.querySelector('.alert')
        alert.classList.add('hide')
    }, 3000)
    // }
</script>
