<div>
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="mb-0 fw-semibold">Usuarios</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript: window.history.go(-1);">Usuarios</a></li>
                        <li class="breadcrumb-item active">{{ $tag }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div x-data="{ show: false, message: '' }" x-show="show"
                x-init="@this.on('show-success-message', (event) => { show = true; message = event.message; setTimeout(() => show = false, 3000); })"
                class="alert alert-success" style="display: none;">
                <span x-text="message"></span>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-1 anchor" id="stripe">
                                Ingresa la Informacion
                            </h5>
                            <p class="text-muted">Datos de la cuenta y comsiones generales.</p>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Nombre Completo</label>
                                    <input type="text" name="name" placeholder="Nombe" class="form-control" id="name"
                                        wire:model.defer="name" required autocomplete="name" value="{{ $name }}">
                                    @error('name') <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" placeholder="email" class="form-control" id="email"
                                        wire:model.defer="email" required autocomplete="email" value="{{ $name }}">
                                    @error('email') <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" placeholder="password" class="form-control"
                                        id="password" wire:model.defer="password" required autocomplete="password">
                                    @error('password') <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefaultUsername" class="form-label">Nivel de Usuario</label>
                                    <div class="input-group">
                                        <select wire:model="role" class="form-select" required>
                                            <option value="">Seleccione un rol</option>
                                            @foreach($roles as $r)
                                            <option value="{{ $r->name }}">{{ ucfirst($r->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('role') <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-12 col-md-auto mbr-section-btn">
                                <button type="button" class="btn btn-secondary display-4" wire:click="updateData"
                                    wire:loading.attr="disabled">
                                    <span wire:loading.remove>Actualizar</span>
                                    <span wire:loading>Actualizando...</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>