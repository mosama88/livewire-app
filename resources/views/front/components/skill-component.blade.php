 <div class="container-xxl py-5">
     <div class="container py-5 px-lg-5">
         <div class="row g-5 align-items-center">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                 <p class="section-title text-secondary">About Us<span></span></p>
                 <h1 class="mb-5">#1 Digital solution with 10 years of experience</h1>
                 <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                     Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna
                     dolore erat amet</p>

                 @foreach ($data as $info)
                     <div class="skill mb-4">
                         <div class="d-flex justify-content-between">
                             <p class="mb-2">{{ $info->name }}</p>
                             <p class="mb-2">{{ $info->progress }}%</p>
                         </div>

                         @if ($info->progress <= 50)
                             <div class="progress">
                                 <div class="progress-bar bg-danger" role="progressbar"
                                     aria-valuenow="{{ $info->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                         @elseif($info->progress <= 60)
                             <div class="progress">
                                 <div class="progress-bar bg-dark" role="progressbar"
                                     aria-valuenow="{{ $info->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                         @elseif($info->progress <= 80)
                             <div class="progress">
                                 <div class="progress-bar bg-primary" role="progressbar"
                                     aria-valuenow="{{ $info->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                         @elseif($info->progress <= 90)
                             <div class="progress">
                                 <div class="progress-bar bg-success" role="progressbar"
                                     aria-valuenow="{{ $info->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                         @endif
                     </div>
                 @endforeach

                 <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
             </div>
             <div class="col-lg-6">
                 <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('front') }}/img/about.png">
             </div>
         </div>
     </div>
 </div>
