<!-- Login page content section -->
<section class="features">
    <div class="container">
        <div style="max-width: 400px; margin: 0 auto;">
            <div class="feature-card">
                <h1 style="color: var(--accent); margin-bottom: 1.5rem; margin-top: 0; text-align: center;">Log ind</h1>
                
                <form action="#" method="POST" style="display: grid; gap: 1rem;">
                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Email</label>
                        <input type="email" id="email" name="email" required 
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <div>
                        <label for="password" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Adgangskode</label>
                        <input type="password" id="password" name="password" required
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <button type="submit" class="cta-btn" style="width: 100%; margin-top: 1rem;">
                        Log ind
                    </button>
                </form>
                
                <div style="text-align: center; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #dce4f5;">
                    <p style="color: var(--text-dark); margin-bottom: 1rem;">Har du ikke en konto endnu?</p>
                    <a href="<?= url('signup') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Opret gratis konto</a>
                </div>
            </div>
        </div>
    </div>
</section>