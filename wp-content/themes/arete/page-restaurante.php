<?php
/**
 * Template: Página Restaurante
 *
 * Réplica exata da página restaurante.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-restaurant hero-subpage" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF4141 (1).avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker">Restaurante</div>
        <img class="hero-logo" src="<?php echo esc_url( arete_asset( 'logos/arete-no-bg.avif' ) ); ?>" alt="Arê" loading="eager" decoding="async">
        <p class="hero-subtitle small">Da horta à mesa, do mar ao prato</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Lifestyle -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <div class="eyebrow" style="margin-bottom: 32px;">Restaurante Arê</div>
        <h2 class="section-heading" style="margin-bottom: 48px;">Cozinha com<br><em>identidade própria</em></h2>
        <div class="marina-columns">
          <div class="marina-column">
            <div class="marina-column-name">Vista para a Marina</div>
            <div class="marina-column-desc">Cada mesa tem uma paisagem. Acompanhe o movimento das embarcações enquanto saboreia seu prato.</div>
          </div>
          <div class="marina-column">
            <div class="marina-column-name">Menu Diversificado</div>
            <div class="marina-column-desc">Sabores frescos e cuidadosamente preparados, com ingredientes locais e temperos da horta.</div>
          </div>
          <div class="marina-column">
            <div class="marina-column-name">Momentos Especiais</div>
            <div class="marina-column-desc">Vista para o pôr do sol, e uma atmosfera encantadora para almoço, fim da tarde e jantar.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Equipe -->
    <section class="split reverse equipe-split">
      <div class="split-media" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4139.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="split-copy light">
        <div class="eyebrow">A equipe</div>
        <h2 class="section-heading">Quem cozinha</h2>
        <p class="copy-text">Com olhar atento para os produtores locais e respeito pela tradição caiçara, cada receita é preparada com cuidado e autenticidade por uma equipe que valoriza a simplicidade dos bons ingredientes.</p>
      </div>
    </section>

    <!-- A cozinha -->
    <section class="split" id="menu">
      <div class="split-media" style="background-image:url('<?php echo esc_url( arete_asset( 'new/horta 2.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="split-copy light">
        <div class="eyebrow">A cozinha</div>
        <h2 class="section-heading">Raízes &amp;<br>Inovação</h2>
        <p class="copy-text">Direto da nossa horta para o prato, ingredientes colhidos no dia, muitas vezes antes do almoço. Nossa gastronomia celebra o território com sensibilidade contemporânea, respeitando a tradição e o compromisso com desperdício zero.</p>
      </div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;">Fazer reserva</a>
      </div>
    </section>

    <!-- Cardápio -->
    <section class="menu-section">
      <div class="menu-layout">
        <!-- Galeria lateral -->
        <div class="menu-gallery">
          <div class="gallery-grid">
            <div class="gallery-item"><img src="<?php echo esc_url( arete_asset( 'shared/DSCF4064.avif' ) ); ?>" alt="" loading="lazy"></div>
            <div class="gallery-item"><img src="<?php echo esc_url( arete_asset( 'new/jantar por do sol restaurante.avif' ) ); ?>" alt="" loading="lazy"></div>
            <div class="gallery-item"><img src="<?php echo esc_url( arete_asset( 'new/sobremesa.avif' ) ); ?>" alt="" loading="lazy"></div>
            <div class="gallery-item"><img src="<?php echo esc_url( arete_asset( 'new/macarrão.avif' ) ); ?>" alt="" loading="lazy"></div>
            <div class="gallery-item"><img src="<?php echo esc_url( arete_asset( 'new/drink.avif' ) ); ?>" alt="" loading="lazy"></div>
          </div>
        </div>

        <!-- Cardápio -->
        <div class="menu-content">
          <div class="menu-inner">
            <div class="eyebrow">Cardápio</div>
            <h2 class="section-heading">Menu</h2>

            <!-- Entradas -->
            <div class="menu-category">
              <h3 class="menu-category-title">Entradas</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Trio Árabe</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 71</span>
                  </div>
                  <p class="menu-item-desc">Homus de grão de bico, coalhada seca, babaganoush, pão pita artesanal</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Ceviche a La Limeña</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 81</span>
                  </div>
                  <p class="menu-item-desc">Cubos de peixe do dia, leite de tigre, cebola pluma e chips de raízes</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Tartar de Salmão</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 93</span>
                  </div>
                  <p class="menu-item-desc">Cubos de salmão com molho cítrico, cebola roxa, tomate e aioli de abacate</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Carpaccio Arê</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 69</span>
                  </div>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Filé Aperitivo</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 104</span>
                  </div>
                  <p class="menu-item-desc">Tiras de mignon aceboladas, fonduta de gorgonzola e batatas fritas</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Isca de Peixe</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 86</span>
                  </div>
                  <p class="menu-item-desc">Empanado na panko, acompanha molho tártaro e molho de pimenta</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Do Mar</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 108</span>
                  </div>
                  <p class="menu-item-desc">Camarão e isca de peixe empanados na panko, acompanha molhos de pimenta e tártaro</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Pastel de Camarão</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 64</span>
                  </div>
                  <p class="menu-item-desc">Pastel artesanal de camarão com alho poró, servido com molho de pimenta da casa</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Pastel de Queijo</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 47</span>
                  </div>
                  <p class="menu-item-desc">Pastel artesanal de queijo meia cura, servido com chutney de manga</p>
                </div>
              </div>
            </div>

            <!-- Saladas -->
            <div class="menu-category">
              <h3 class="menu-category-title">Saladas</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Salada da Horta</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 50</span>
                  </div>
                  <p class="menu-item-desc">Mix de folhas, cenoura, tomatinhos, sementes de abóbora tostadas e vinagrete de laranja com abacate</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Chicken Caesar</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 73</span>
                  </div>
                  <p class="menu-item-desc">Alface americana, tiras de frango grelhados, molho caesar, croutons e queijo parmesão</p>
                </div>
              </div>
            </div>

            <!-- Sopas -->
            <div class="menu-category">
              <h3 class="menu-category-title">Sopas</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Sopa do Dia</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 50</span>
                  </div>
                  <p class="menu-item-desc">Consulte os sabores disponíveis</p>
                </div>
              </div>
            </div>

            <!-- Pizzas -->
            <div class="menu-category">
              <h3 class="menu-category-title">Pizzas</h3>
              <p class="menu-category-sub">Fermentação natural</p>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Calabresa</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 75</span>
                  </div>
                  <p class="menu-item-desc">Pomodoro rústico, queijo mozzarella, calabresa fatiada, cebola e orégano</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Portuguesa</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 77</span>
                  </div>
                  <p class="menu-item-desc">Pomodoro rústico, queijo mozzarella, presunto, cebola, pimentão vermelho e amarelo, ovos cozidos, azeitona preta e orégano</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Margherita</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 73</span>
                  </div>
                  <p class="menu-item-desc">Pomodoro rústico, queijo mozzarella, tomate cereja fresco e manjericão</p>
                </div>
              </div>
            </div>

            <!-- Sanduíches -->
            <div class="menu-category">
              <h3 class="menu-category-title">Sanduíches</h3>
              <p class="menu-category-sub">Servidos com fritas ou salada</p>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Crispy Fish</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 62</span>
                  </div>
                  <p class="menu-item-desc">Pão brioche, filé de peixe empanado, alface, tomate, cebola roxa e maionese especial</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Burger Aretê</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 73</span>
                  </div>
                  <p class="menu-item-desc">Pão artesanal, burger de angus, queijo meia cura, alface americana, bacon, tomate e picles</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Greek Veggie</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 47</span>
                  </div>
                  <p class="menu-item-desc">Pão pita, tomate, berinjela, abobrinha e cenoura grelhadas, manjericão, pasta de grão de bico e gergelim</p>
                </div>
              </div>
            </div>

            <!-- Principais -->
            <div class="menu-category">
              <h3 class="menu-category-title">Principais</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Moqueca Aretê</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 146</span>
                  </div>
                  <p class="menu-item-desc">Frutos do mar, banana da terra, arroz e farofa de dendê</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Salmão Grelhado</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 127</span>
                  </div>
                  <p class="menu-item-desc">Com risotto de limão siciliano e feijões verdes</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Peixe au Beurre Blanc</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 109</span>
                  </div>
                  <p class="menu-item-desc">Peixe do dia, molho Beurre Blanc, e legumes salteados em azeite de brasa</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Chicken Tikka Masala</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 91</span>
                  </div>
                  <p class="menu-item-desc">Iscas de frango marinadas ao estilo indiano, acompanhadas de mil folhas de batata doce e arroz com gergelim</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Tournedos au Rôti</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 119</span>
                  </div>
                  <p class="menu-item-desc">Filé mignon ao rôti com batatas Lucienne</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Filet aux Poivre Vert</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 119</span>
                  </div>
                  <p class="menu-item-desc">Tournedor grelhado ao molho de pimenta do reino verde e spaghettini na manteiga de ervas frescas</p>
                </div>
              </div>
            </div>

            <!-- Risottos -->
            <div class="menu-category">
              <h3 class="menu-category-title">Risottos</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Risoto de Cogumelos Confitados</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 96</span>
                  </div>
                  <p class="menu-item-desc">Arroz carnaroli, funghi porcini, alho poró, cebola, parmesão e manteiga</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Risoto de Camarão</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 115</span>
                  </div>
                  <p class="menu-item-desc">Arroz arbóreo, camarões salteados, rúcula, tomate cereja, limão siciliano, parmesão e manteiga</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Risoto de Mignon</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 107</span>
                  </div>
                  <p class="menu-item-desc">Tiras de filé mignon e funghi porcini, vinho branco, parmesão e tomilho</p>
                </div>
              </div>
            </div>

            <!-- Massas -->
            <div class="menu-category">
              <h3 class="menu-category-title">Massas</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Fetuccine with Prawns</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 119</span>
                  </div>
                  <p class="menu-item-desc">Massa italiana, creme fresco, alho, abobrinha, vinho branco e camarão</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Spaghetti Mare</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 113</span>
                  </div>
                  <p class="menu-item-desc">Massa italiana com molho de frutos do mar (lula, camarão e mexilhão), ao estilo provençal</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Spaghetti alla Carbonara</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 83</span>
                  </div>
                  <p class="menu-item-desc">Com bacon crispy, gemas frescas e parmesão</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Penne ao Pesto</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 73</span>
                  </div>
                  <p class="menu-item-desc">Pesto ao estilo genovês, com tomatinhos e azeitonas pretas</p>
                </div>
              </div>
            </div>

            <!-- Sobremesas -->
            <div class="menu-category">
              <h3 class="menu-category-title">Sobremesas</h3>
              <div class="menu-items">
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Brownie de Chocolate</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 42</span>
                  </div>
                  <p class="menu-item-desc">Caramelo salgado, crumble de cacau e sorvetes de creme</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Romeu e Julieta</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 42</span>
                  </div>
                  <p class="menu-item-desc">Flan de queijo com coulis de goiabada e crumble de gengibre</p>
                </div>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name">Sorvete (02 bolas)</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">R$ 36</span>
                  </div>
                  <p class="menu-item-desc">Creme ou chocolate</p>
                </div>
              </div>
            </div>
          </div>
          <button class="menu-ver-mais" onclick="this.previousElementSibling.classList.toggle('expanded');this.textContent=this.textContent==='Ver cardápio completo'?'Ver menos':'Ver cardápio completo'">Ver cardápio completo</button>
        </div>
      </div>
    </section>

    <!-- Horários -->
    <section class="hours-section">
      <div class="hours-inner">
        <div class="eyebrow">Horários</div>
        <h2 class="section-heading">Funcionamento</h2>

        <div class="hours-grid">
          <div class="hours-block">
            <h3 class="hours-label">Café da Manhã</h3>
            <p class="hours-time">07h30 às 10h30</p>
            <p class="hours-note">Aberto a hóspedes e visitantes</p>
          </div>

          <div class="hours-block">
            <h3 class="hours-label">Almoço e Jantar</h3>
            <p class="hours-time">12h30 às 22h30</p>
            <p class="hours-note">Aberto a hóspedes e visitantes</p>
          </div>
        </div>

        <p class="hours-cta">Para reservas, ligue <a href="tel:+552220080155">+55 (22) 2008-0155</a></p>
      </div>
    </section>
<?php get_footer(); ?>
