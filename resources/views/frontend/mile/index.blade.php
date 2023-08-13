@extends('layouts.frontend')
@section('title', 'মিলের হিসাব')
@section('content')
<!-- About Start -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @if($miles->count()>0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>সদস্যদের নাম</th>
                                    <th>বেলা</th>
                                    <th>দিন 1</th>
                                    <th>দিন 2</th>
                                    <th>দিন 3</th>
                                    <th>দিন 4</th>
                                    <th>দিন 5</th>
                                    <th>দিন 6</th>
                                    <th>দিন 7</th>
                                    <th>দিন 8</th>
                                    <th>দিন 9</th>
                                    <th>দিন 10</th>
                                    <th>দিন 11</th>
                                    <th>দিন 12</th>
                                    <th>দিন 13</th>
                                    <th>দিন 14</th>
                                    <th>দিন 15</th>
                                    <th>দিন 16</th>
                                    <th>দিন 17</th>
                                    <th>দিন 18</th>
                                    <th>দিন 19</th>
                                    <th>দিন 20</th>
                                    <th>দিন 21</th>
                                    <th>দিন 22</th>
                                    <th>দিন 23</th>
                                    <th>দিন 24</th>
                                    <th>দিন 25</th>
                                    <th>দিন 26</th>
                                    <th>দিন 27</th>
                                    <th>দিন 28</th>
                                    <th>দিন 29</th>
                                    <th>দিন 30</th>
                                    <th>দিন 31</th>
                                    <th>সদস্যদের মোট মিল</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($miles as $mile)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h5>{{ $mile->name }}</h5>
                                        </td>
                                        <td>
                                            <p class="mt-1" style="font-size: 1rem;">সকাল:</p>
                                            <p class="mt-3" style="font-size: 1rem; padding: .3rem 0 0 0;">দুপুর:</p>
                                            <p class="mt-3" style="font-size: 1rem; padding: .5rem 0 0 0;">সন্ধা:</p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal1" disabled value="{{ $mile->sokal1 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur1" disabled value="{{ $mile->dupur1 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri1" disabled value="{{ $mile->rattri1 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal2" disabled value="{{ $mile->sokal2 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur2" disabled value="{{ $mile->dupur2 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri2" disabled value="{{ $mile->rattri2 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal3" disabled value="{{ $mile->sokal3 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur3" disabled value="{{ $mile->dupur3 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri3" disabled value="{{ $mile->rattri3 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal4" disabled value="{{ $mile->sokal4 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur4" disabled value="{{ $mile->dupur4 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri4" disabled value="{{ $mile->rattri4 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal5" disabled value="{{ $mile->sokal5 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur5" disabled value="{{ $mile->dupur5 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri5" disabled value="{{ $mile->rattri5 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal6" disabled value="{{ $mile->sokal6 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur6" disabled value="{{ $mile->dupur6 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri6" disabled value="{{ $mile->rattri6 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal7" disabled value="{{ $mile->sokal7 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur7" disabled value="{{ $mile->dupur7 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri7" disabled value="{{ $mile->rattri7 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal8" disabled value="{{ $mile->sokal8 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur8" disabled value="{{ $mile->dupur8 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri8" disabled value="{{ $mile->rattri8 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal9" disabled value="{{ $mile->sokal9 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur9" disabled value="{{ $mile->dupur9 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri9" disabled value="{{ $mile->rattri9 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal10" disabled value="{{ $mile->sokal10 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur10" disabled value="{{ $mile->dupur10 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri10" disabled value="{{ $mile->rattri10 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal11" disabled value="{{ $mile->sokal11 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur11" disabled value="{{ $mile->dupur11 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri11" disabled value="{{ $mile->rattri11 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal12" disabled value="{{ $mile->sokal12 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur12" disabled value="{{ $mile->dupur12 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri12" disabled value="{{ $mile->rattri12 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal13" disabled value="{{ $mile->sokal13 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur13" disabled value="{{ $mile->dupur13 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri13" disabled value="{{ $mile->rattri13 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal14" disabled value="{{ $mile->sokal14 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur14" disabled value="{{ $mile->dupur14 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri14" disabled value="{{ $mile->rattri14 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal15" disabled value="{{ $mile->sokal15 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur15" disabled value="{{ $mile->dupur15 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri15" disabled value="{{ $mile->rattri15 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal16" disabled value="{{ $mile->sokal16 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur16" disabled value="{{ $mile->dupur16 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri16" disabled value="{{ $mile->rattri16 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal17" disabled value="{{ $mile->sokal17 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur17" disabled value="{{ $mile->dupur17 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri17" disabled value="{{ $mile->rattri17 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal18" disabled value="{{ $mile->sokal18 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur18" disabled value="{{ $mile->dupur18 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri18" disabled value="{{ $mile->rattri18 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal19" disabled value="{{ $mile->sokal19 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur19" disabled value="{{ $mile->dupur19 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri19" disabled value="{{ $mile->rattri19 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal20" disabled value="{{ $mile->sokal20 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur20" disabled value="{{ $mile->dupur20 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri20" disabled value="{{ $mile->rattri20 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal21" disabled value="{{ $mile->sokal21 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur21" disabled value="{{ $mile->dupur21 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri21" disabled value="{{ $mile->rattri21 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal22" disabled value="{{ $mile->sokal22 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur22" disabled value="{{ $mile->dupur22 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri22" disabled value="{{ $mile->rattri22 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal23" disabled value="{{ $mile->sokal23 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur23" disabled value="{{ $mile->dupur23 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri23" disabled value="{{ $mile->rattri23 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal24" disabled value="{{ $mile->sokal24 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur24" disabled value="{{ $mile->dupur24 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri24" disabled value="{{ $mile->rattri24 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal25" disabled value="{{ $mile->sokal25 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur25" disabled value="{{ $mile->dupur25 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri25" disabled value="{{ $mile->rattri25 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal26" disabled value="{{ $mile->sokal26 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur26" disabled value="{{ $mile->dupur26 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri26" disabled value="{{ $mile->rattri26 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal27" disabled value="{{ $mile->sokal27 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur27" disabled value="{{ $mile->dupur27 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri27" disabled value="{{ $mile->rattri27 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal28" disabled value="{{ $mile->sokal28 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur28" disabled value="{{ $mile->dupur28 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri28" disabled value="{{ $mile->rattri28 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal29" disabled value="{{ $mile->sokal29 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur29" disabled value="{{ $mile->dupur29 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri29" disabled value="{{ $mile->rattri29 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal30" disabled value="{{ $mile->sokal30 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur30" disabled value="{{ $mile->dupur30 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri30" disabled value="{{ $mile->rattri30 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="sokal31" disabled value="{{ $mile->sokal31 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dupur31" disabled value="{{ $mile->dupur31 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rattri31" disabled value="{{ $mile->rattri31 }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                            $total = $mile->sokal1 + $mile->dupur1 + $mile->rattri1 + $mile->sokal2 + $mile->dupur2 + $mile->rattri2 + $mile->sokal3 + $mile->dupur3 + $mile->rattri3 + $mile->sokal4 + $mile->dupur4 + $mile->rattri4 + $mile->sokal5 + $mile->dupur5 + $mile->rattri5 + $mile->sokal6 + $mile->dupur6 + $mile->rattri6 + $mile->sokal7 + $mile->dupur7 + $mile->rattri7 + $mile->sokal8 + $mile->dupur8 + $mile->rattri8 + $mile->sokal9 + $mile->dupur9 + $mile->rattri9 + $mile->sokal10 + $mile->dupur10 + $mile->rattri10 + $mile->sokal11 + $mile->dupur11 + $mile->rattri11 + $mile->sokal12 + $mile->dupur12 + $mile->rattri12 + $mile->sokal13 + $mile->dupur13 + $mile->rattri13 + $mile->sokal14 + $mile->dupur14 + $mile->rattri14 + $mile->sokal15 + $mile->dupur15 + $mile->rattri15 + $mile->sokal16 + $mile->dupur16 + $mile->rattri16 + $mile->sokal17 + $mile->dupur17 + $mile->rattri17 + $mile->sokal18 + $mile->dupur18 + $mile->rattri18 + $mile->sokal19 + $mile->dupur19 + $mile->rattri19 + $mile->sokal20 + $mile->dupur20 + $mile->rattri20 + $mile->sokal21 + $mile->dupur21 + $mile->rattri21 + $mile->sokal22 + $mile->dupur22 + $mile->rattri22 + $mile->sokal23 + $mile->dupur23 + $mile->rattri23 + $mile->sokal24 + $mile->dupur24 + $mile->rattri24 + $mile->sokal25 + $mile->dupur25 + $mile->rattri25 + $mile->sokal26 + $mile->dupur26 + $mile->rattri26 + $mile->sokal27 + $mile->dupur27 + $mile->rattri27 + $mile->sokal28 + $mile->dupur28 + $mile->rattri28 + $mile->sokal29 + $mile->dupur29 + $mile->rattri29 + $mile->sokal30 + $mile->dupur30 + $mile->rattri30 + $mile->sokal31 + $mile->dupur31 + $mile->rattri31;
                                            @endphp
                                            <div class="form-group">
                                                <input type="text" name="total" disabled value="{{ $total }}" class="fomr-group text-center" style="width: 100%;">
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <span class="text-center">
                            <h2>No Data</h2>
                        </span>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->





<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-white">KidKinder</span>
            </a>
            <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Get In Touch</h3>
            <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Address</h5>
                    <p>123 Street, New York, USA</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Phone</h5>
                    <p>+012 345 67890</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Newsletter</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
            by
            <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
</div>
<!-- Footer End -->
@endsection