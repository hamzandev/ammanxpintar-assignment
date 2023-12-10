<x-app-layout title="Notification">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-md-flex d-grid align-items-center justify-content-between mb-md-0 mb-5">
                <div>
                    <h1>All Notification</h1>
                    <p class="text-secondary mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quos quas enim!
                    </p>
                </div>
                <button class="btn btn-outline-primary rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Mark all as read
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="divide-y">
                        @for ($i = 0; $i < 10; $i++)
                            <div>
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="avatar">JL</span>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('user.notification.show', $i+1) }}" class="link" style="color: inherit;">
                                            <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a
                                                witch."</strong> post.
                                        </a>
                                        <div class="text-secondary">yesterday</div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="badge bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
