<form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="space-y-5">
  @csrf
  @method('PUT')
  <input type="number" name="service_id" value="{{ old('service_id', $booking->service_id) }}">
  <input type="date" name="date" value="{{ old('date', $booking->date) }}">
  <input type="time" name="time" value="{{ old('time', $booking->time) }}">
  <select name="status">
    <option value="pending" {{ old('status', $booking->status)=='pending' ? 'selected':'' }}>Pending</option>
    <option value="confirmed" {{ old('status', $booking->status)=='confirmed' ? 'selected':'' }}>Confirmed</option>
    <option value="cancelled" {{ old('status', $booking->status)=='cancelled' ? 'selected':'' }}>Cancelled</option>
  </select>
  <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Mettre à jour</button>
</form>
