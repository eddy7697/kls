@extends('main')

@section('custom-script')
    <script type="text/javascript">
         $(document).ready(function(){
            var getSearch = window.location.search.split('?')[1];
            var searchName = getSearch.split('=')[1];
            (searchName == 'location')? $('#search').val('reservation') : console.log('noLocation') ;
         });
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        .sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(5) a{
            opacity: 1;
        }
        .mega-menu .contact .mega-menu-list ul li:nth-child(3) a{
            border: solid 1px #B3B3B3 !important;
        }
    </style>
@endsection


@section('content')
    <section id="subPage-contact">
        
        <div class="container-fulid information-banner">
            <div class="contact-banner-inner">
                <div class="contact-banner-inner-text">
                    <h1>諮詢專區</h1>
                    <p>感謝您蒞臨凱麗斯旅行箱專賣店，我們十分期待能隨時為您服務，歡迎您在這裡留下您的疑問，我們將在收到您的訊息後以最快的速度回覆給您，也請您隨時留意您登記的電子郵件信箱，再次誠摯的感謝您的蒞臨，也希望您能在這邊找到一款屬於您的冒險。</p>
                </div>
            </div>
        </div>

        <div class="container contact-container">
            <div class="row information-content">
                <div class="col-md-10 center-content col-tel">
                    <form action="" method="post">
                        <table class="contact-table">
                            <tbody>
                               <tr>
                                    <td style="width: 100%;">
                                        <h1>聯絡表單</h1>
                                        <hr>
                                        <p>請詳細填寫您的資訊及疑問，以便我們精準為您回覆，非常感謝您。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>姓名</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input class="form-control" placeholder="" id="name-input" name="name" type="text" required="" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>性別</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input name="sex" id="mr" type="radio"><label for="mr">先生</label>
                                            <input name="sex" id="miss" type="radio"><label for="miss">小姐</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>電子郵件</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input class="form-control" placeholder="" id="name-input" name="email" type="text" required="" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>聯絡電話</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input class="form-control" placeholder="" id="phone-input" name="phone" type="text" required="" pattern="^[0-9/-]*$" title="僅允許數字"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>查詢類型</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must"></td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <select class="form-control" name="search" id="search">
                                                <option value="porductInfo">箱款資訊</option>
                                                <option value="shoppingQ">購物問題</option>
                                                <option value="warrantyQ">保固問題</option>
                                                <option value="transportQ">運送問題</option>
                                                <option value="dealQ">經銷問題</option>
                                                <option value="reservation">預約挑箱</option>
                                                <option value="other">其他</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="content-input-tr">
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>詢問內容</p>
                                            <p class="form-remind">提醒您，若您填寫得越精準，越有利我們及時回覆給您資訊。</p> 
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <textarea class="form-control" placeholder="" id="content-input" name="content" style="resize: vertical; min-height: 150px;" required></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="privacyText">
                                    <td>
                                        <p class="form-remind">
                                            我們不會將您輸入的任何個人信息用於回答查詢以外的目的，此外，我們將根據
                                            <a href="https://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=I0050021" target="_blank">個人資料保護法</a>
                                            第六條，妥善管理您的個人信息。您亦可<a href="/about/privacy" target="_blank">點擊這裡</a>查看更多關於KLS提供的隱私權保護政策。
                                            請您務必將KLS的電子郵件地址或域名設置為可接收的電子郵件，以免錯過我們的回覆，您亦可直接我們聯繫<a href="/about/location" target="_blank">(點擊這裡查看聯絡訊息)</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="margin: 0 auto;">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>我不是機器人</strong>
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:100%; text-align: center;">
                                        <button id="submitBtn" class="btn btn-lg btn-secondary" type="submit">送出訊息</button>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </section>
    
@endsection
