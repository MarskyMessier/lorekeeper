@extends('admin.layout')

@section('admin-title')
    Testground
@endsection

@section('admin-content')
    {!! breadcrumbs(['Admin Panel' => 'admin', 'Testground' => 'admin/testground']) !!}

    <h1>Testground</h1>

    <p>Here you can check the different properties and classes Lorekeeper has, useful when you change the style or have theme manager enabled on it.
        To change the text you will need to go edit the testground.blade directly for now.
        <br>
        Everything down here can be found under boostrap 4, so for those under boostrap 5 might need to add what's new to it.
    </p>

<br>

<div class="card" style="max-width: 300px;">
  <div class="card-header pt-3">
    <h5>
      <i class="fas fa-list mr-2"></i>
      Table of content
    </h5>
  </div>

  <div class="card-body px-2">
    <ul>

      <li class="pb-2">
        <a href="#" id="headinglk" data-toggle="collapse" data-target="#collapselk" aria-expanded="true" aria-controls="collapselk">
          Lorekeeper commons
        </a>
        <ol id="collapselk" class="collapse show" aria-labelledby="headinglk">
          <li><a href="#lknavbar">Lorekeeper's navbar</a></li>
          <li><a href="#lktables">Notification table</a></li>
          <li><a href="#lktext">Text & headings</a></li>
          <li><a href="#lkbody">Cards, containers and body</a></li>
        </ol>
      </li>
      <li class="pb-2">
        <a href="#" id="heading1" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          Content
        </a>
        <ol id="collapse1" class="collapse show" aria-labelledby="heading1">
          <li><a href="#container">Containers</a></li>
          <li><a href="#typo">Typography</a></li>
          <li><a href="#code">Code display</a></li>
          <li><a href="#images">Images</a></li>
          <li><a href="#tables">Tables</a></li>
          <li><a href="#figures">Figures</a></li>
        </ol>
      </li>

      <li class="pb-2">
        <a href="#" id="heading2" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          Components
        </a>
        <ol id="collapse2" class="collapse" aria-labelledby="heading2">
          <li><a href="#alerts">Alerts</a></li>
          <li><a href="#badge">Badge</a></li>
          <li><a href="#breadcrumb">Breadcrumb</a></li>
          <li><a href="#buttons">Buttons</a></li>
          <li><a href="#card">Card</a></li>
          <li><a href="#carousel">Carousel</a></li>
          <li><a href="#collapse">Collapse</a></li>
          <li><a href="#dropdowns">Dropdowns</a></li>
          <li><a href="#forms">Forms</a></li>
          <li><a href="#inputgroup">Input group</a></li>
          <li><a href="#jumbotron">Jumbotron</a></li>
          <li><a href="#listgroup">List group</a></li>
          <li><a href="#modal">Modal</a></li>
          <li><a href="#navs">Navs</a></li>
          <li><a href="#navbar">Navbar</a></li>
          <li><a href="#pagination">Pagination</a></li>
          <li><a href="#popovers">Popovers</a></li>
          <li><a href="#scrollspy">Scrollspy</a></li>
          <li><a href="#tooltips">Tooltips</a></li>
        </ol>
      </li>

      <li class="pb-2">
        <a href="#" id="heading3" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
          Utilities (decoration)
        </a>
        <ol id="collapse3" class="collapse" aria-labelledby="heading3">
        </ol>
      </li>

    </ul>
  </div>
</div>

<div class="card-header mt-3">
  <h3 id="lkcommons">Lorekeeper commons</h3>
</div>

<h4 id="lknavbar" class="mt-2">Lorekeeper's navbar</h4>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
      <a class="navbar-brand" >
        {{ config('lorekeeper.settings.site_name', 'Lorekeeper') }}
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentexample" aria-controls="navbarSupportedContentexample" aria-expanded="false"    aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContentexample">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link d-flex text-warning" ><strong>News</strong><i class="fas fa-bell"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" >Sales</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
              Home
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" >
                My Characters
            </a>
            <a class="dropdown-item" >
                My MYO Slots
            </a>
            <a class="dropdown-item" >
              Inventory
            </a>
            <a class="dropdown-item" >
              Bank
            </a>
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" >
              Liked Comments
            </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" >Disabled</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin') }}"><i class="fas fa-crown"></i>
                <span class="position-relative rounded-circle bg-danger text-light" style="top: -10px; right: 5px; padding: 2px 5px 2px 5px; font-weight:bold; font-size: 0.8em; box-shadow: 1px 1px 1px rgba(0,0,0,.25);">1</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-secondary btn-sm" href="#"><span class="fas fa-envelope" aria-hidden="true"></span> 10</a>
            <li>
            
            <li class="nav-item dropdown">
                <a id="browseDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Submit
                </a>

                <div class="dropdown-menu" aria-labelledby="browseDropdown">
                    <a class="dropdown-item">                                
                        Submit Prompt
                    </a>
                    <a class="dropdown-item">
                        Submit Claim
                    </a>
                    <a class="dropdown-item">
                        Submit Report
                    </a>
                </div>
            </li>
        </ul>
      </div>
    </nav>

<br>

    <p>Paragraph</p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum neque nisl, aliquet eget varius et, consectetur nec lectus. Proin ac malesuada odio. Vivamus quis nibh non massa vulputate consectetur. Aliquam fermentum, nulla in lobortis laoreet, libero sem pretium risus, in dictum felis risus in mi. Nulla aliquam urna ut turpis lacinia congue. Quisque lobortis massa nec nunc facilisis lobortis eu ut nunc. Maecenas blandit sodales tellus, vel posuere purus bibendum nec. Donec vel nulla lacinia, dignissim nibh sed, hendrerit sem. Integer et mauris id libero placerat dapibus. Nam quam sem, auctor quis purus non, feugiat egestas ipsum.
    </p>

<br>
    
    <hr>
    <hr style="border-top: 3px solid">
    <hr style="border-top: 3px dashed">
    <hr style="border-top: 3px dotted">
    <hr style="border-top: 3px double">

    <i class="fas fa-question-circle help-icon" data-toggle="tooltip" title="Tooltip test / help icon specific to LoreKeeper" aria-hidden="true"></i>

<br>

    

<br>

    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>

<br>

    <div class="row">
        <div class="col">
            <div class="card p-2 mx-2">
                <p>Card with native borders</p>
            </div>
        </div>

        <div class="col">
            <div class="card p-2 mx-2 border-0">
                <p>Card without native borders</p>
            </div>
        </div>
    </div>

<br>

    <div class="container p-2">
        <p>Container</p>
    </div>

<br>

    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
          <option>Option 5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
          <option>Option 5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> This is an example of a text area.</textarea>
      </div>
    </form>

<br>

<div class="container-fluid flex-wrap" style="overflow-x: scroll;">
<table class="table table-sm text-center">
  <thead>
    <tr>
      <th scope="col">Table</th>
      <th scope="col">Primary</th>
      <th scope="col">Secondary</th>
      <th scope="col">Success</th>
      <th scope="col">Danger</th>
      <th scope="col">Warning</th>
      <th scope="col">Info</th>
      <th scope="col">Faded</th>
      <th scope="col">Light</th>
      <th scope="col">Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Buttons</th>
      <td><a class="btn btn-primary">Primary</a></td>
      <td><a class="btn btn-secondary">Secondary</a></td>
      <td><a class="btn btn-success">Success</a></td>
      <td><a class="btn btn-danger">Danger</a></td>
      <td><a class="btn btn-warning">Warning</a></td>
      <td><a class="btn btn-info">Info</a></td>
      <td><a class="btn btn-faded">Faded</a></td>
      <td><a class="btn btn-light">Light</a></td>
      <td><a class="btn btn-dark">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Buttons Outline</th>
      <td><a class="btn btn-outline-primary">Primary</a></td>
      <td><a class="btn btn-outline-secondary">Secondary</a></td>
      <td><a class="btn btn-outline-success">Success</a></td>
      <td><a class="btn btn-outline-danger">Danger</a></td>
      <td><a class="btn btn-outline-warning">Warning</a></td>
      <td><a class="btn btn-outline-info">Info</a></td>
      <td><a class="btn btn-outline-faded">Faded</a></td>
      <td><a class="btn btn-outline-light">Light</a></td>
      <td><a class="btn btn-outline-dark">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Buttons Disabled</th>
      <td><a class="btn btn-primary disabled">Primary</a></td>
      <td><a class="btn btn-secondary disabled">Secondary</a></td>
      <td><a class="btn btn-success disabled">Success</a></td>
      <td><a class="btn btn-danger disabled">Danger</a></td>
      <td><a class="btn btn-warning disabled">Warning</a></td>
      <td><a class="btn btn-info disabled">Info</a></td>
      <td><a class="btn btn-faded disabled">Faded</a></td>
      <td><a class="btn btn-light disabled">Light</a></td>
      <td><a class="btn btn-dark disabled">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Buttons Outline Disabled</th>
      <td><a class="btn btn-outline-primary disabled">Primary</a></td>
      <td><a class="btn btn-outline-secondary disabled">Secondary</a></td>
      <td><a class="btn btn-outline-success disabled">Success</a></td>
      <td><a class="btn btn-outline-danger disabled">Danger</a></td>
      <td><a class="btn btn-outline-warning disabled">Warning</a></td>
      <td><a class="btn btn-outline-info disabled">Info</a></td>
      <td><a class="btn btn-outline-faded disabled">Faded</a></td>
      <td><a class="btn btn-outline-light disabled">Light</a></td>
      <td><a class="btn btn-outline-dark disabled">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Text</th>
      <td class="text-primary">Primary</td>
      <td class="text-secondary">Secondary</td>
      <td class="text-success">Success</td>
      <td class="text-danger">Danger</td>
      <td class="text-warning">Warning</td>
      <td class="text-info">Info</td>
      <td class="text-faded">Faded</td>
      <td class="text-light">Light</td>
      <td class="text-dark">Dark</td>
    </tr>
    <tr>
      <th scope="row">Bg-</th>
      <td class="bg-primary">Primary</td>
      <td class="bg-secondary">Secondary</td>
      <td class="bg-success">Success</td>
      <td class="bg-danger">Danger</td>
      <td class="bg-warning">Warning</td>
      <td class="bg-info">Info</td>
      <td class="bg-faded">Faded</td>
      <td class="bg-light">Light</td>
      <td class="bg-dark">Dark</td>
    </tr>
  </tbody>
  
  <tbody class="bg-secondary">
    <tr>
      <th scope="row">Buttons</th>
      <td><a class="btn btn-primary">Primary</a></td>
      <td><a class="btn btn-secondary">Secondary</a></td>
      <td><a class="btn btn-success">Success</a></td>
      <td><a class="btn btn-danger">Danger</a></td>
      <td><a class="btn btn-warning">Warning</a></td>
      <td><a class="btn btn-info">Info</a></td>
      <td><a class="btn btn-faded">Faded</a></td>
      <td><a class="btn btn-light">Light</a></td>
      <td><a class="btn btn-dark">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Buttons Outline</th>
      <td><a class="btn btn-outline-primary">Primary</a></td>
      <td><a class="btn btn-outline-secondary">Secondary</a></td>
      <td><a class="btn btn-outline-success">Success</a></td>
      <td><a class="btn btn-outline-danger">Danger</a></td>
      <td><a class="btn btn-outline-warning">Warning</a></td>
      <td><a class="btn btn-outline-info">Info</a></td>
      <td><a class="btn btn-outline-faded">Faded</a></td>
      <td><a class="btn btn-outline-light">Light</a></td>
      <td><a class="btn btn-outline-dark">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Buttons Disabled</th>
      <td><a class="btn btn-primary disabled">Primary</a></td>
      <td><a class="btn btn-secondary disabled">Secondary</a></td>
      <td><a class="btn btn-success disabled">Success</a></td>
      <td><a class="btn btn-danger disabled">Danger</a></td>
      <td><a class="btn btn-warning disabled">Warning</a></td>
      <td><a class="btn btn-info disabled">Info</a></td>
      <td><a class="btn btn-faded disabled">Faded</a></td>
      <td><a class="btn btn-light disabled">Light</a></td>
      <td><a class="btn btn-dark disabled">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Buttons Outline Disabled</th>
      <td><a class="btn btn-outline-primary disabled">Primary</a></td>
      <td><a class="btn btn-outline-secondary disabled">Secondary</a></td>
      <td><a class="btn btn-outline-success disabled">Success</a></td>
      <td><a class="btn btn-outline-danger disabled">Danger</a></td>
      <td><a class="btn btn-outline-warning disabled">Warning</a></td>
      <td><a class="btn btn-outline-info disabled">Info</a></td>
      <td><a class="btn btn-outline-faded disabled">Faded</a></td>
      <td><a class="btn btn-outline-light disabled">Light</a></td>
      <td><a class="btn btn-outline-dark disabled">Dark</a></td>
    </tr>
    <tr>
      <th scope="row">Text</th>
      <td class="text-primary">Primary</td>
      <td class="text-secondary">Secondary</td>
      <td class="text-success">Success</td>
      <td class="text-danger">Danger</td>
      <td class="text-warning">Warning</td>
      <td class="text-info">Info</td>
      <td class="text-faded">Faded</td>
      <td class="text-light">Light</td>
      <td class="text-dark">Dark</td>
    </tr>
    <tr>
      <th scope="row">Bg-</th>
      <td class="bg-primary">Primary</td>
      <td class="bg-secondary">Secondary</td>
      <td class="bg-success">Success</td>
      <td class="bg-danger">Danger</td>
      <td class="bg-warning">Warning</td>
      <td class="bg-info">Info</td>
      <td class="bg-faded">Faded</td>
      <td class="bg-light">Light</td>
      <td class="bg-dark">Dark</td>
    </tr>
  </tbody>
</table>
</div>

@endsection
