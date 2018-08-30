{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script id="zammad_form_script" src="https://helpdesk.fitzmuseum.cam.ac.uk/assets/form/form.js"></script>

<script>
    $(function () {
        $('#feedback-form').ZammadForm({
            messageTitle: 'Feedback Form',
            messageSubmit: 'Submit',
            messageThankYou: 'Thank you for your inquiry (#%s)! We\'ll contact you as soon as possible.',
            modal: true
        });
    });
</script>
<!-- Cookie Consent by https://PrivacyPolicies.com -->
<script type="text/javascript" src="//PrivacyPolicies.com/cookie-consent/releases/2.0.0/cookie-consent.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        cookieconsent.run({
            "notice_banner_type": "headline",
            "consent_type": "express",
            "palette": "dark",
            "cookies_policy_url": "https://www.fitzmuseum.cam.ac.uk/website/cookiepolicy",
            "website_name": "The Winsor and Newton Archive"
        });
    });
</script>

<noscript><a href="https://privacypolicies.com/cookie-consent/">Cookie Consent by PrivacyPolicies.com</a></noscript>
<!-- End Cookie Consent -->