<table id="tech-companies-1" class="table table-striped mb-0 text-center">
    <tbody>
        @forelse ($countries as $country)
            <tr>
                <td>
                    {{ $country->country }}
                </td>

                <td>
                    <a href="{{ route('admin.countries.edit', ['country' => $country->id]) }}" class="mf-3"><i class="far fa-edit text-warning"></i></a>
                </td>
                <td>
                    <form action="{{ route('admin.countries.destroy', ['country' => $country->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>
                    </form>
                </td>
                <td>
                    <small class="badge badge-pill badge-dark">{{ Carbon\Carbon::parse($country->created_at)->toFormattedDateString() }}</small>
                </td>
                <td class="float-right">
                    <form action="{{ route('admin.change') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="switchToggle p-0">
                            <input type="hidden" name="id" value="{{ $country->id}}">
                            <input type="checkbox" class="mt-1" id="{{ $country->id }}" name="active" {{ $country->active ? 'checked' : ''  }} onchange="this.form.submit();">
                            <label style="margin-top: 10px" for="{{ $country->id }}">Toggle</label>
                        </div>
                    </form>
                </td>
            </tr>
        @empty
        <p class="text-center"><a href="{{ route('admin.countries.index') }}">NO RUSLT SPECIFIED BUT YOU CAN TO SEE ALL CLICK RUSLT</a></p>
        @endforelse
    </tbody>
</table>