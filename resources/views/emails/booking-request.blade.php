<!doctype html>
<html>
  <body>
    <h2>New Discovery Call Request</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Contact on WhatsApp:</strong> {{ !empty($data['whatsapp']) ? 'Yes' : 'No' }}</p>
    <p><strong>Preferred time:</strong> {{ $data['preferred_time'] ?? 'Not provided' }}</p>
    <p>--</p>
  </body>
</html>

