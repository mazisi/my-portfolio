<div>
<form wire:submit="sendMail">
    <div class="row g-3">
        <div class="col-md-6 ">
            <input wire:model="name" type="text" class="form-control bg-3 border border-1 rounded-3" id="name" name="name" placeholder="Your name" aria-label="username" />
            <div class="text-danger" >@error('name') {{ $message }} @enderror</div>
        </div>
        <div class="col-md-6">
            <input wire:model="phone" type="text" class="form-control bg-3 border border-1 rounded-3" id="phone" name="phone" placeholder="Phone" aria-label="phone" />
            <div class="text-danger">@error('phone') {{ $message }} @enderror</div>
        </div>
        <div class="col-md-6">
            <input wire:model="email" type="email" class="form-control bg-3 border border-1 rounded-3" id="email" name="email" placeholder="Email" aria-label="email" />
            <div class="text-danger" >@error('email') {{ $message }} @enderror</div>
        </div>
        <div class="col-md-6">
            <input wire:model="subject" type="text" class="form-control bg-3 border border-1 rounded-3" id="subject" name="subject" placeholder="Subject" aria-label="subject" />
            <div class="text-danger">@error('subject') {{ $message }} @enderror</div>
        </div>
        <div class="col-12">
            <textarea wire:model="message" class="form-control bg-3 border border-1 rounded-3" id="message" name="message" placeholder="Message" aria-label="With textarea"></textarea>
            <div class="text-danger" >@error('message') {{ $message }} @enderror</div>
        </div>
        <div class="col-12">
            <button  type="submit" class="btn btn-primary-2 rounded-2" wire:loading.attr="disabled">
                Send Message
                <i class="ri-arrow-right-up-line"></i>
            </button>
            @if(session()->has('success'))
                    <div class="text-white">{{ session('success') }}</div>
            @endif
            @if(session()->has('error'))
                    <div class="text-white">{{ session('error') }}</div>
            @endif
        </div>
    </div>
</form>
<style>
    .text-danger{
        color: red !important;
    }
    .text-white{
        color: #A8FF53 !important;
    }
</style>
</div>
