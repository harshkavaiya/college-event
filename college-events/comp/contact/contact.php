<link rel="stylesheet" href="comp/contact/contact.css">

<div class="contact" id="contact">
    <div class="cont-col">
        <h3>Send Us a Messages<img src="images/message.svg"></h3>
        <p>
            Feel free to reach out through the contact form below. We value your feedback and inquiries, and we will get
            back to you as soon as possible. Your questions and comments are important to us, and we look forward to
            assisting you with any information you may need.
        </p>
        <ul>
            <li><img src="images/mail.svg" alt="">hkavaiya001@gmail.com</li>
            <li><img src="images/call.svg" alt="">+91 8238443846</li>
            <li><img src="images/inst.svg" alt="">harsh_kavaiya_8989</li>
        </ul>
    </div>
    <div class="cont-col">
        <form method="POST" id="form">
            <!--web3 form-->
            <input type="hidden" name="access_key" value="f4eccbac-a2ff-4331-b3fc-14a8c184c045">
            <input type="hidden" name="subject" value="New message from college-event website">
            <input type="checkbox" name="botcheck" id="" style="display: none;">
            <!--end web3 form-->
            <label for="name">Your name*</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <label for="phone">Phone Number*</label>
            <input type="tel" name="phone" id="phone" placeholder="Enter Your Number" required>
            <label for="mess">Write Your Messages here*</label>
            <textarea name="mess" id="message" rows="6" placeholder="Enter your message" required></textarea>

            <button type="submit" class="btn dark-btn">Send Now<img src="images/w-arrow.png"></button>
        </form>
        <span id="result"></span>
    </div>
</div>

<script src="comp/contact/contact.js"></script>