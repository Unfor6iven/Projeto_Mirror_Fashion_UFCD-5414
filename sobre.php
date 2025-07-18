    <?php
    $header_title = 'Sobre Mirror Fashion';
    include 'header.php';
    ?>

    <!-- Comentário em HTML -->
    <!-- Ctrl + ~ -->
    <!-- <a href="index.html" class="header-logo">
        <img src="IMG/logo.png" alt="Logo Mirror Fashion">
    </a> -->

    <article id="sobrebox" class="container">
        <h1>A Mirror Fashion</h1>

        <!-- em 1932 -->

        <p>
            A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo.
            Fundada há <?php print date('Y') - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de
            participação em 118 deles.
        </p>

        <figure id="centro-distribuicao">
            <img src="IMG/centro-distribuicao.png" alt="Centro de distribuição">
            <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
        </figure>

        <p>
            Nosso centro de distribuição fica em <a href="https://www.google.com.br/maps?q=Jacarezinho"
                target="_blank">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que
            distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
        </p>

        <p>
            Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.php">nossa loja</a> ou entre em <a
                href="#">contato</a>
            se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a
                href="#diferenciais">diferenciais</a>.
        </p>

        <h2 id="historia">História</h2>

        <figure id="familia-pelho">
            <img src="IMG/familia-pelho.jpg" alt="Familia Pelho">
            <figcaption>Família Pelho</figcaption>
        </figure>

        <p>
            A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A
            <em>família Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa,
            revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão
            administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado
            de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
        </p>

        <p>
            O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
            Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões
            de usuários diferentes, em bilhões de diferentes pedidos.
        </p>

        <p>
            O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do
            Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do
            Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e
            nos escritórios em todo país.
        </p>

        <p>
            Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios,
            homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror
            Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
        </p>

        <iframe
            class="yt-box"
            width="560"
            height="315"
            src="https://www.youtube.com/embed/Tb06abHE4hY?si=rxgyhyFO7mHCKHEp"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
        </iframe>

        <h2 id="diferenciais">Diferenciais</h2>

        <ul>
            <li>Menor preço do varejo, garantido.</li>
            <li>Se você achar uma loja mais barata, leva o produto de graça.</li>
            <li>Pague em reais, dólares, euros ou bitcoins.</li>
            <li>Todas as compras com frete grátis para o mundo todo.</li>
            <li>Maior comércio eletrônico de moda do mundo.</li>
            <li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama.</li>
            <li>Presente em 124 países.</li>
            <li>Mais de um milhão de funcionários em todo o mundo.</li>
        </ul>

    </article>

        <iframe
            class="map-box"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58692.98225059368!2d-50.00953861341322!3d-23.158832443842055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.      1!3m3!1m2!1s0x94c026544d26f253%3A0xc66dac11dad56f73!2sJacarezinho%2C%20PR%2C%2086400-000%2C%20Brasil!5e0!3m2!1spt-PT!2spt!4v1751974289533!5m2!1spt-PT!2spt"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        
    <?php include 'footer.php'; ?>