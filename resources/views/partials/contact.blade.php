<!-- Contact Area Start -->
<div class="contact-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="contact-form section-title text-center">
                    <h2 class="pb-5">Contact Form</h2>
                    <div class="row">
                        <form id="contact-form" action="{{route('emails.store')}}" method="POST">
                            @csrf
                            <div class="col-sm-6">
                                <input class="mb-30" placeholder="Name" name="name" type="text">
                            </div>
                            <div class="col-sm-6">
                                <input class="mb-30" placeholder="Email" name="email" type="text">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="mb-30" cols="30" rows="7" name="message" placeholder="subject"></textarea>
                                <button type="submit">submit</button>
                                <p class="form-message"></p>
                            </div>
                            <div class="mt-4" style="display: none">

                                <x-input value="4" id="password_confirmation" class="block mt-1 w-full"
                                                type="number"
                                                name="lu" required />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->