@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #1 Utilisateur</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/user" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="firstname">
                    <label for="lastname">lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="<?=\App\Utilisateurs::GENDER_MALE ?>"><?= \App\Utilisateurs::genderFormatter(\App\Utilisateurs::GENDER_MALE) ?></option>
                        <option value="<?=\App\Utilisateurs::GENDER_FEMALE ?>"><?= \App\Utilisateurs::genderFormatter(\App\Utilisateurs::GENDER_FEMALE) ?></option>
                        <option value="<?=\App\Utilisateurs::GENDER_OTHER ?>"><?= \App\Utilisateurs::genderFormatter(\App\Utilisateurs::GENDER_OTHER) ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="newsletter" value="<?= \App\Utilisateurs::NEWS_YES ?>"> suscribe to newsletter
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="<?= \App\Utilisateurs::MOOD_HAPPY ?>" checked>
                            <?= \App\Utilisateurs::moodFormatter(\App\Utilisateurs::MOOD_HAPPY) ?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="<?= \App\Utilisateurs::MOOD_SAD ?>">
                          <?= \App\Utilisateurs::moodFormatter(\App\Utilisateurs::MOOD_SAD) ?>
                      </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
