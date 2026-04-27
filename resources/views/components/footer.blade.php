
    <footer class="bg-dark text-light pt-5 pb-3 mt-5 border-top border-secondary">
    <div class="container">
        <div class="row g-4">

            <!-- Brand -->
            <div class="col-12 col-md-4">
                <h4 class="fw-bold">Il Mio Sito</h4>
                <p class="text-secondary small">
                    Qualità, passione e prodotti selezionati per offrirti il meglio.
                </p>
            </div>

            <!-- Navigazione -->
            <div class="col-6 col-md-2">
                <h6 class="text-uppercase fw-bold">Navigazione</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('homepage') }}" class="text-secondary text-decoration-none">Home</a></li>
                    <li><a href="{{ route('aboutUs') }}" class="text-secondary text-decoration-none">Chi siamo</a></li>
                    <li><a href="{{ route('contacts') }}" class="text-secondary text-decoration-none">Contatti</a></li>
                </ul>
            </div>

            <!-- Extra -->
            <div class="col-6 col-md-3">
                <h6 class="text-uppercase fw-bold">Info</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-secondary text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none">Termini</a></li>
                </ul>
            </div>

            <!-- Contatti -->
            <div class="col-12 col-md-3">
                <h6 class="text-uppercase fw-bold">Contatti</h6>
                <p class="small text-secondary mb-1">info@ilmiosito.it</p>
                <p class="small text-secondary">+39 123 456 7890</p>

                <!-- Social -->
                <div class="mt-2">
                    <a href="#" class="text-light me-2">FB</a>
                    <a href="#" class="text-light me-2">IG</a>
                    <a href="#" class="text-light">LN</a>
                </div>
            </div>

        </div>

        <hr class="border-secondary mt-4">

        <div class="text-center small text-secondary">
            © {{ date('Y') }} Il Mio Sito — Tutti i diritti riservati
        </div>
    </div>
</footer>

