@extends('layouts.app')
@section('title','Companies')

@section('content')
    <div class="body-wrapper">
      <div class="row">
          <div class="col">
              <a href="{{route('companies.create')}}" class="btn btn-success mt-3">Co'mpany qo'shish</a>
              <table class="table table-striped border border-dark mt-2 mb-2">
                  <thead>
                  <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Adress</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Resident</th>
                      <th scope="col">Birthday</th>
                      <th scope="col">Status</th>
{{--                      <th>Massage</th>--}}
                      <th scope="col" class="text-center" colspan="2">Amalar</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($companies as $kay => $company)
                      <tr>
                          <td >
                              {{(($companies->currentpage()-1)*$companies->perpage())+($loop->index + 1)}}
                          </td>
                          <td >
                              <a href="{{route('companies.show',['company'=>$company->id])}}">
                              {{$company->name}}</td>
                          </a>
                          <td >{{$company->adress}}</td>
                          <td >{{$company->phone}}</td>
                          <td >{{$company->resident}}</td>
                          <td >{{$company->birthday}}</td>
                          <td >{{$company->satus}}</td>
{{--                          <td>{{$massage}}</td>--}}
                          <td >
                              <a class="btn btn-success" href="{{route('companies.edit',['company' => $company->id])}}">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                      <path d="M13.5 6.5l4 4"></path>
                                  </svg>
                              </a>
                          </td>
                          <td>
                              <form method="post" action="{{route('companies.destroy',['company'=>$company->id])}}">
                                  @method('DELETE')
                                  @csrf
                                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M4 7l16 0"></path>
                                          <path d="M10 11l0 6"></path>
                                          <path d="M14 11l0 6"></path>
                                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                      </svg>
                                  </button>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      {{csrf_field()}}
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  <h2>Siz rostanxam bu kompaniyani o'chirmoqchimisiz?</h2>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yo'q</button>
                                                  <button type="submit" class="btn btn-success" >Xa</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </td>
{{--                          <td >--}}
{{--                              <a class="btn btn-success" href="{{route('companies.edit',['company' => $company->delete_at])}}">--}}
{{--                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>--}}
{{--                                      <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>--}}
{{--                                      <path d="M13.5 6.5l4 4"></path>--}}
{{--                                  </svg>--}}
{{--                              </a>--}}
{{--                          </td>--}}
                      </tr>
                  @endforeach
                  </tbody>
              </table>
              {{$companies->links()}}
          <!-- Button trigger modal -->


              <!-- Modal -->

          </div>
    </div>

  </div>

@endsection
