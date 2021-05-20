<div>
    <div class="form-input">
        <form wire:submit.prevent="store">
            <label>First Name</label>
            <input type="text" wire:model.lazy="firstname" />
            @error('firstname')
            <p class="error">{{ $message }}</p>
            @enderror
            <br>
            <label>Last Name</label>
            <input type="text" wire:model.lazy="lastname" />
            @error('lastname')
            <p class="error">{{ $message }}</p>
            @enderror
            <br>
            <input type="submit" value="Submit" />
        </form>
    </div>
    <div class="table">
    <table>
        <thead>
            <tr class="border_bottom">
                <th>First Name</th>
                <th>Last Name</th>    
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr class="border_bottom">
                    <td>{{ $row->firstname }}</td>
                    <td>{{ $row->lastname }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
