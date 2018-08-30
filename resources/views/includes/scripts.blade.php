{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script id="zammad_form_script" src="https://helpdesk.fitzmuseum.cam.ac.uk/assets/form/form.js"></script>

<script>
    $(function() {
        $('#feedback-form').ZammadForm({
            messageTitle: 'Feedback Form',
            messageSubmit: 'Submit',
            messageThankYou: 'Thank you for your inquiry (#%s)! We\'ll contact you as soon as possible.',
            modal: true
        });
    });
</script>