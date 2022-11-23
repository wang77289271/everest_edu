<div class="contact">
        <div class="contact_wrapper">
          <div class="contact_title">
            <h1>Let's get in touch</h1>
            <p>
              If you have any questions, comments, or concerns we'd love to hear
              from you. Just fill out the form below and we will get back to you
              as soon as possible.
            </p>
          </div>
          <!--ContactForm-->
          <div class="contact-form">
            <form action="{{url('send_email_contact_us')}}" method="POST">
              @csrf
              <div class="contact-form-name">
                <div class="contact-form-control">
                  <input
                    type="text"
                    id="fname"
                    name="fname"
                    placeholder="First Name *"
                    required
                  />
                </div>
                <div class="contact-form-control">
                  <input
                    type="text"
                    id="lname"
                    name="lname"
                    placeholder="Last Name"
                    required
                  />
                </div>
              </div>
              <div class="contact-form-name">
                <div class="contact-form-control">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email *"
                    required
                  />
                </div>
                <div class="contact-form-control">
                  <input
                    type="phone"
                    id="phone"
                    name="phone"
                    placeholder="Phone Number"
                  />
                </div>
              </div>
              <div class="contact-form-control">
                <textarea
                  type="message"
                  id="message"
                  name="message"
                  placeholder="Message *"
                  required
                ></textarea>
              </div>
              <div class="contactForm-btn">
                <button type="submit">SUBMIT</button>
              </div>
            </form>
          </div>

          <!--endContactForm-->
        </div>
      </div>