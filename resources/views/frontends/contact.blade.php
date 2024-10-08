@extends('frontends.layouts.contact1')

@section('content-contact')
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <div class="content mb-5">
                    <h2 id="we-would-love-to-hear-from-you">Chúng tôi rất mong nhận được hồi âm từ bạn&hellip;.</h2>
                    <p>Hãy gửi cho chúng tôi về ý kiến của bạn tại đây. Cảm ơn bạn rất nhiều!</p>
                </div>

                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="name">Tên của bạn <i class="text-danger">(Bắt buộc nhập)</i></label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Khổng Trọng Khánh" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Địa chỉ email của bạn <i class="text-danger">(Bắt buộc nhập)</i></label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="khanh@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Lý do bạn gửi tin nhắn này</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Bài đăng hay">
                    </div>
                    <div class="form-group">
                        <label for="message">Viết lời nhắn của bạn tại đây</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Bạn cảm thấy vui..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi ngay</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
