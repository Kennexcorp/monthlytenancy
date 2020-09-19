const paymentForm = document.getElementById('paymentForm');
const appurl = document.getElementById('callback').value;
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
        key: 'pk_test_d2a0eca1a7d7a92d47007fe63ed12c9b8ef564da', // Replace with your public key
        email: document.getElementById('email').value,
        amount: document.getElementById('amount').value * 100,
        firstname: document.getElementById('name').value,
        
        // lastname: document.getElementById('last-name').value,
        metadata: {
            property: document.getElementById('property').value,
            duration: document.getElementById('duration').value,
            user: document.getElementById('user').value,
        },
        ref: 'MT' + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function() {
            alert('Window closed.');
        },
        callback: function(response) {
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
            window.location = appurl + '/' + response.reference;
        },
    });
    handler.openIframe();
}
