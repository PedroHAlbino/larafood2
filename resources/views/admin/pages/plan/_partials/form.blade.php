<div class="col-md-6">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $plan->name ?? '' }}">
            </div>
            <div class="form-group">
                <label>Preço</label>
                <input type="number" name="price" class="form-control" placeholder="Preço:" value="{{$plan->price ?? '' }}">
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{$plan->description ?? '' }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>  