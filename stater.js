<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script>
    var canvas = document.getElementById('signature-pad');
    var signaturePad = new SignaturePad(canvas);

    function handleSubmit() {
        // Save signature data as a base64 string
        var signatureData = signaturePad.toDataURL('image/png');
        document.getElementById('signature-data').value = signatureData;
        return true;
    }
</script>
