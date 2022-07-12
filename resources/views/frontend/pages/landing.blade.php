@extends('frontend.layout.app')
@section('content')
@if ($state)
<div class="alert js-alert">
  <div>Vielen Dank für Ihr Interesse. Wir werden Ihre Anfrage so schnell als möglich bearbeiten.</div>
</div>
@endif

<figure class="visual-bg">
  {{-- <picture>
    <source media="(min-width: 1600px)" srcset="/assets/media/visual-billroth-minerva-xl.webp" type="image/webp">
    <source media="(min-width: 1600px)" srcset="/assets/media/visual-billroth-minerva-xl.jpg">
    <source media="(min-width: 1200px)" srcset="/assets/media/visual-billroth-minerva-lg.webp" type="image/webp">
    <source media="(min-width: 1200px)" srcset="/assets/media/visual-billroth-minerva-lg.jpg">
    <source media="(min-width: 900px)" srcset="/assets/media/visual-billroth-minerva-md.webp" type="image/webp">
    <source media="(min-width: 900px)" srcset="/assets/media/visual-billroth-minerva-md.jpg">
    <img src="/assets/media/visual-austrasse.jpg" 
      alt="Wohnen im Kreis 3 | Austrasse Zürich" 
      title="Wohnen im Kreis 3 | Austrasse Zürich" 
      height="900" 
      width="375">
  </picture> --}}
</figure>
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1>Wohnen im Kreis 3</h1>
      <p><strong>Erstvermietung</strong><br>An der Austrasse 46–56 und Wiedingstrasse 87a-d entstehen per Sommer 2024 neue, moderne und energetisch nachhaltige 1- bis 5.5-Zimmer-Wohnungen sowie wenige Gewerbeflächen.</p>
      <p>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet. Bitte füllen Sie bei Interesse das Kontaktformular aus.</p>
    </article>
  </div>
</section>
<section class="page-section is-light">
  <div class="page-inner">
    <article>
      <h1>Kontaktformular</h1>
      <form method="POST" action="{{ route('page_landing_subscribe') }}" class="contact-form js-validate">
        @csrf
        <div class="grid-2x1">
          <div class="span">
            @if ($errors->has('firstname'))
              <div class="error-message is-floating">{{ $errors->first('firstname') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">Vorname muss ausgefüllt sein!</div>
            @endif
            <input type="text" name="firstname" placeholder="Vorname *" data-rules="required">
          </div>
          <div class="span">
            @if ($errors->has('name'))
              <div class="error-message is-floating">{{ $errors->first('name') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">Name muss ausgefüllt sein!</div>
            @endif
            <input type="text" name="name" placeholder="Name *" data-rules="required">
          </div>
          <div class="span">
            @if ($errors->has('email'))
              <div class="error-message is-floating">{{ $errors->first('email') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">E-Mail-Adresse muss gültig sein!</div>
            @endif
            <input type="text" name="email" placeholder="E-Mail *" data-rules="required|valid_email">
          </div>
          <div class="span">
            @if ($errors->has('phone'))
              <div class="error-message is-floating">{{ $errors->first('phone') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">Telefon muss gültig sein!</div>
            @endif
            <input type="text" name="phone" placeholder="Telefon *" data-rules="required">
          </div>
          <div class="span">
            <div class="form-button">
              <input type="submit" value="Absenden" class="js-btn-submit">
            </div>
          </div>
        </div>
      </form>
    </article>
  </div>
</section>
@endsection