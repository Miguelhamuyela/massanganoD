<div class="popup-subscribe-area">
    <div class="container">
        <div class="popup-subscribe ">
            @if ($subscription)
                <div class="box-img img-sub">
                    <img src="{{ asset('img/news/' . $subscription->image) }}" alt="Image">
                </div>
            @endif
            <div class="box-content">
                <button class="simple-icon popupClose">
                    <i class="fal fa-times"></i>
                </button>
                <div class="widget newsletter-widget footer-widget">
                    {{-- <h3 class="widget_title">Subscrição</h3>
                    <p class="footer-text">Cadastre-se para receber atualizações sobre nós. Não tenha pressa, seu e-mail está seguro.</p>
                     <form class="newsletter-form">
                        <input class="form-control" type="email" placeholder="Enter Email" required>
                        <button type="submit" class="icon-btn">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form> --}}
                    <h3 class="widget_title">Busque Rápido!</h3>
                    <p class="footer-text">Encontre a sua univercidade, pesquisando pelo nome. Também poderá pesquisar
                        finalistas, pelo número do BI.</p>
                    <button type="button" class="simple-icon searchBoxToggler">
                        <span class="me-2"
                            style="border: 1px solid; border-radius:10px; padding:10px;">Pesquisar...</span><i
                            class="far fa-search"></i>
                    </button>
                    <div class="mt-30">
                        <input type="checkbox" id="destroyPopup">
                        <label for="destroyPopup">Não quero ver esse pop-up novamente.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
