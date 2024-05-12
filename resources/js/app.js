import './bootstrap';

$.ajax({
    method: 'POST',
    url: '/programme/' + programme_id + '/like',
    data: {
        _token: csrfToken,
    },
    success: function(response) {
        console.log(response.message);
    },
    error: function(xhr, status, error) {
        console.error('Error:', error);
    },
});