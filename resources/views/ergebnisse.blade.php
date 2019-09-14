@extends('layouts.index') @section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="card mrg_bottom">
            <div class="page_title_block">
                <div class="col-md-5 col-xs-12">
                    <div class="page_title">Ergebnisse</div>
                </div>
            </div>

            @if(isset($ergebnisse))

            <div class="col-md-12 mrg-top">

                <table id="user_data" class="table table-striped table-bordered table-hover no-footer" role="grid"
                    aria-describedby="user_data_info" style="width: 1648px;">
                    <thead>
                        <tr>
                            <th>Lauf</th>
                            <th>Stadt</th>
                            <th>Datum</th>
                            <th>Lauf Jahr</th>
                            <th>Lauf Strecke</th>
                            <th>Gesamt-PL</th>
                            <th>MWPl</th>
                            <th>AKPl</th>
                            <th>Startnr.</th>
                            <th>Name</th>
                            <th>m/w</th>
                            <th>Jahrg</th>
                            <th>Verein</th>
                            <th>AK</th>
                            <th>Netto-Zeit</th>
                            <th>Brutto-Zeit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ergebnisse as $ergebniss)
                        <tr>
                            <td>{{ $ergebniss->lauf }}</td>
                            <td>{{ $ergebniss->stadt }}</td>
                            <td>{{ $ergebniss->datum }}</td>
                            <td>{{ $ergebniss->lauf_jahr }}</td>
                            <td>{{ $ergebniss->lauf_strecke }}</td>
                            <td>{{ $ergebniss->gesamt_pl }}</td>
                            <td>{{ $ergebniss->MWPl }}</td>
                            <td>{{ $ergebniss->AKPl }}</td>
                            <td>{{ $ergebniss->start_number }}</td>
                            <td>{{ $ergebniss->name }}</td>
                            <td>{{ $ergebniss->m_w }}</td>
                            <td>{{ $ergebniss->birth_year }}</td>
                            <td>{{ $ergebniss->verein }}</td>
                            <td>{{ $ergebniss->AK }}</td>
                            <td>{{ $ergebniss->netto_zeit }}</td>
                            <td>{{ $ergebniss->brutto_zeit }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $ergebnisse->links() }}
            </div>

            @endif

            <div class="clearfix"></div>
        </div>
    </div>
</div>



@endsection
