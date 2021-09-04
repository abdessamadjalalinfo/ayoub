<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Comparateur d'assurance</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/capture.png" alt="" >
    
    <div class="alert alert-success" role="alert">
     
      <strong> Votre assurance auto a été résiliée ?</strong>  Nous vous assurons au meilleur tarif !
    </div>
  </div>
  @if(Session::has('message'))
<div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif

  <div class="row">
    
    <div class="col-md-5 order-md-2 mb-4">
        <img class="col-md-12"src="img/pp.png" alt="" >
      <h5 style=' font-size: 15px;' class="alert alert-success" >TROUVER UNE ASSURANCE AUTO APRÈS RÉSILIATION !</h5>
      <p style=' font-size: 10px;'>De nombreux conducteur se trouvent résiliés à l’initiative de leur compagnie d’assurance et trouvent des difficultés pour souscrire une nouvelle compagnie d’assurance. En effet, il existe plusieurs raisons qui peuvent pousser une compagnie d’assurance à résilier l’assurance d’un de ses clients. Notamment le non paiement des redevances et de la prime d’assurance, le cumul des accidents, qu’ils soient responsables ou pas et l’incident de permis pour excès de vitesse, pour alcool au volant et plusieurs autres raisons. Ces situations transforment l’assuré qui est en principe un client, en un assuré à risque. Les compagnies d’assurance auto font un tri annuel des clients « fidèles » et les gardent, tandis que les clients dénommés « à risque » sont séparés de la compagnie. Dans cette situation, l’assuré résilié va avoir du mal à s’assurer de nouveau, car les autres assureurs le considèreront également comme un assuré à risques. Soit les assureurs refuseront de le couvrir, soit ils lui feront payer le prix fort.0</p>
      <h6 style=' font-size: 15px;' class="alert alert-success" >NOUS AVONS LA SOLUTION POUR VOUS !</h6>
      <p style=' font-size: 10px;'>
        Pour retrouver une compagnie d’assurance auto après une résiliation par l’assureur, vous pouvez avoir recours et vous tourner vers Meleine. Nous vous offrons une aide très précieuse en vous accompagnant à choisir la formule d’assurance auto qui vous convient le plus. Malgré le fait que vous soyez considéré comme un conducteur à risque. Meleine est en fait un courtier indépendant, qui a le souci de répondre à vos besoins en assurance, tout en respectant votre budget.
        Tous les assurés résiliés par leur compagnie, peuvent, désormais, bénéficier d’une nouvelle assurance automobile !
      </p>
    </div>
   
    <div class="col-md-6 order-md-1">
      <h4 class="mb-3 alert alert-primary" role="alert">Comparez les assurances auto en  <strong>  3 minutes</strong></h4>
    <form action='{{route('submit')}}' class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nom</label>
            <input name='nom' type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Prénom</label>
            <input  name='prénom' type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

       

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Obligatoire)</span></label>
          <input name='émail' type="email" class="form-control" id="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address .
          </div>
        </div>
        <div class="mb-3">
          <label for="address2">Date de Naissance<span class="text-muted">(Obligatoire)</span></label>
          <input name='date' type="date" class="form-control" id="address2" placeholder="Date de naissance" required>
        </div>

        

        <div class="mb-3">
          <label for="address2">Votre Télephone<span class="text-muted">(Obligatoire)</span></label>
          <input name='télephone' type="text" class="form-control" id="address2" placeholder="+33xxxxxxxxxx" required>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Motif de votre résiliation</label>
            <select name="résiliation" class="custom-select d-block w-100" id="country" required>
              <option value="">Motif de votre résiliation ?</option>
              <option value="Non paiement">Non paiement</option>
              <option value="Alcoolémie">Alcoolémie</option>
              <option value="Sinistres">Sinistres</option>
              <option value="Suspension de permis">Suspension de permis</option>
              <option value="Annulation de permis">Annulation de permis</option>
              <option value="Autre motif">Autre motif</option>  
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Marque du véhicule à assurer</label>
            <select name='marque'class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
             

                <option value="ALEKO">
ALEKO									</option>
                <option value="ALFA ROMEO">
ALFA ROMEO									</option>
                <option value="ALPINE RENAULT">
ALPINE RENAULT									</option>
                <option value="ARO">
ARO									</option>
                <option value="ASIA">
ASIA									</option>
                <option value="ASTON MARTIN">
ASTON MARTIN									</option>
                <option value="AUDI">
AUDI									</option>
                <option value="AUSTIN">
AUSTIN									</option>
                <option value="AUTOBIANCHI">
AUTOBIANCHI									</option>
                <option value="AUVERLAND">
AUVERLAND									</option>
                <option value="BEDFORD">
BEDFORD									</option>
                <option value="BENTLEY">
BENTLEY									</option>
                <option value="BERTONE">
BERTONE									</option>
                <option value="BMW">
BMW									</option>
                <option value="BUICK">
BUICK									</option>
                <option value="CADILLAC">
CADILLAC									</option>
                <option value="CHEVROLET">
CHEVROLET									</option>
                <option value="CHRYSLER">
CHRYSLER									</option>
                <option value="CITROEN">
CITROEN									</option>
                <option value="COURB">
COURB									</option>
                <option value="DACIA">
DACIA									</option>
                <option value="DAEWOO">
DAEWOO									</option>
                <option value="DAF">
DAF									</option>
                <option value="DAIHATSU">
DAIHATSU									</option>
                <option value="DAIMLER">
DAIMLER									</option>
                <option value="DATSUN">
DATSUN									</option>
                <option value="DODGE">
DODGE									</option>
                <option value="DS">
DS									</option>
                <option value="EBRO">
EBRO									</option>
                <option value="FIAT">
FIAT									</option>
                <option value="FISKER">
FISKER									</option>
                <option value="FORD">
FORD									</option>
                <option value="FSO-POLSKI">
FSO-POLSKI									</option>
                <option value="GAC GONOW">
GAC GONOW									</option>
                <option value="GME">
GME									</option>
                <option value="GRANDIN">
GRANDIN									</option>
                <option value="HONDA">
HONDA									</option>
                <option value="HYUNDAI">
HYUNDAI									</option>
                <option value="INFINITI">
INFINITI									</option>
                <option value="INNOCENTI">
INNOCENTI									</option>
                <option value="ISUZU">
ISUZU									</option>
                <option value="IVECO">
IVECO									</option>
                <option value="JAGUAR">
JAGUAR									</option>
                <option value="JEEP">
JEEP									</option>
                <option value="KIA">
KIA									</option>
                <option value="LADA">
LADA									</option>
                <option value="LANCIA">
LANCIA									</option>
                <option value="LAND ROVER">
LAND ROVER									</option>
                <option value="LDV">
LDV									</option>
                <option value="LEXUS">
LEXUS									</option>
                <option value="LOTUS">
LOTUS									</option>
                <option value="MAHINDRA">
MAHINDRA									</option>
                <option value="MARUTI">
MARUTI									</option>
                <option value="MASERATI">
MASERATI									</option>
                <option value="MATRA">
MATRA									</option>
                <option value="MAZDA">
MAZDA									</option>
                <option value="MCC">
MCC									</option>
                <option value="MEGA">
MEGA									</option>
                <option value="MERCEDES">
MERCEDES									</option>
                <option value="MG">
MG									</option>
                <option value="MIA">
MIA									</option>
                <option value="MINI">
MINI									</option>
                <option value="MITSUBISHI">
MITSUBISHI									</option>
                <option value="NISSAN">
NISSAN									</option>
                <option value="OPEL">
OPEL									</option>
                <option value="PANHARD">
PANHARD									</option>
                <option value="PEUGEOT">
PEUGEOT									</option>
                <option value="PIAGGIO">
PIAGGIO									</option>
                <option value="PONTIAC">
PONTIAC									</option>
                <option value="PORSCHE">
PORSCHE									</option>
                <option value="PROTON">
PROTON									</option>
                <option value="RENAULT">
RENAULT									</option>
                <option value="ROVER">
ROVER									</option>
                <option value="SAAB">
SAAB									</option>
                <option value="SANTANA">
SANTANA									</option>
                <option value="SEAT">
SEAT									</option>
                <option value="SKODA">
SKODA									</option>
                <option value="SMART">
SMART									</option>
                <option value="SSANGYONG">
SSANGYONG									</option>
                <option value="SUBARU">
SUBARU									</option>
                <option value="SUNBEAM">
SUNBEAM									</option>
                <option value="SUZUKI">
SUZUKI									</option>
                <option value="TALBOT">
TALBOT									</option>
                <option value="TATA">
TATA									</option>
                <option value="TESLA">
TESLA									</option>
                <option value="THINK">
THINK									</option>
                <option value="TOYOTA">
TOYOTA									</option>
                <option value="TRIUMPH">
TRIUMPH									</option>
                <option value="UMM">
UMM									</option>
                <option value="VOLKSWAGEN">
VOLKSWAGEN									</option>
                <option value="VOLVO">
VOLVO									</option>
                <option value="ZASTAVA">
ZASTAVA									</option>
                <option value="ZAZ">
ZAZ									</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Puissance fiscale</label>
            <input name='puissance' type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">En cochant cette case, j'accepte de recevoir les offres de LEADMARKET par email et/ou par SMS.</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">En cochant cette case, j'accepte de recevoir les offres commerciales des partenaires de LEADMARKET par email et/ou par SMS.</label>
        </div>
        <hr class="mb-4">

        

        
        
        
        <hr class="mb-4">
        <button class="btn btn-danger btn-lg btn-block" type="submit">Je compare</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">2020 Ayoub assurance</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>
