@extends('layouts.app')

@section('content')
  <div id="root">
    <ul>
      <li v-for="sport in sports" :key="sport.id">
        <h2>@{{ sport.name }}</h2>
        <p>@{{ sport.description }}</p>
        <p>@{{ sport.equipment }}</p>
        <p>@{{ sport.team_members }}</p>
        <p>@{{ sport.governing_body }}</p>
        <p>@{{ sport.olympic }}</p>
      </li>
    </ul>
  </div>
@endsection

@section('head')
  <!-- cdn Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- cdn Vue.js -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
@endsection

@section('foot-script')
  <script type="text/javascript">
    let app = new Vue({
      el: '#root',
      data: {
        sports: []
      },
      created() {
        axios.get('http://localhost:8001/api/sports').then((response) => {
          console.log(response);
          this.sports = response.data.data;
        })
      }
    })
  </script>
@endsection
