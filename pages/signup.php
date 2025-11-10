<!-- Signup page content section -->
<section class="features">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <div class="feature-card">
                <h1 style="color: var(--accent); margin-bottom: 1.5rem; margin-top: 0; text-align: center;">Opret gratis konto</h1>
                
                <form action="#" method="POST" style="display: grid; gap: 1rem;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div>
                            <label for="first_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Fornavn</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                        </div>
                        
                        <div>
                            <label for="last_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Efternavn</label>
                            <input type="text" id="last_name" name="last_name" required
                                   style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Email</label>
                        <input type="email" id="email" name="email" required 
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <div>
                        <label for="organization_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Foreningsnavn</label>
                        <input type="text" id="organization_name" name="organization_name" required
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <div>
                        <label for="password" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Adgangskode</label>
                        <input type="password" id="password" name="password" required
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <button type="submit" class="cta-btn" style="width: 100%; margin-top: 1rem;">
                        Opret konto
                    </button>
                </form>
                
                <div style="text-align: center; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #dce4f5;">
                    <p style="color: var(--text-dark); margin-bottom: 1rem;">Har du allerede en konto?</p>
                    <a href="<?= url('login') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Log ind her</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (max-width: 767px) {
    .features .container > div > div form > div:first-child {
        grid-template-columns: 1fr !important;
    }
}
</style>