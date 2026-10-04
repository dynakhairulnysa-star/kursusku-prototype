(function () {
  const canvas = document.getElementById('tech-bg');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let w, h, nodes = [], mouse = { x: -1000, y: -1000 };

  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
    nodes = [];
    const count = Math.min(80, Math.floor((w * h) / 18000));
    for (let i = 0; i < count; i++) {
      nodes.push({
        x: Math.random() * w,
        y: Math.random() * h,
        vx: (Math.random() - 0.5) * 0.4,
        vy: (Math.random() - 0.5) * 0.4,
        r: Math.random() * 1.8 + 1,
      });
    }
  }

  function draw() {
    ctx.fillStyle = 'rgba(5, 15, 13, 0.08)';
    ctx.fillRect(0, 0, w, h);

    for (let i = 0; i < nodes.length; i++) {
      for (let j = i + 1; j < nodes.length; j++) {
        const dx = nodes[i].x - nodes[j].x;
        const dy = nodes[i].y - nodes[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < 140) {
          ctx.strokeStyle = 'rgba(20, 184, 166, ' + ((1 - dist / 140) * 0.5) + ')';
          ctx.lineWidth = 0.8;
          ctx.beginPath();
          ctx.moveTo(nodes[i].x, nodes[i].y);
          ctx.lineTo(nodes[j].x, nodes[j].y);
          ctx.stroke();
        }
      }
    }

    nodes.forEach(function (n) {
      n.x += n.vx;
      n.y += n.vy;
      if (n.x < 0 || n.x > w) n.vx *= -1;
      if (n.y < 0 || n.y > h) n.vy *= -1;

      const dmx = n.x - mouse.x;
      const dmy = n.y - mouse.y;
      const dm = Math.sqrt(dmx * dmx + dmy * dmy);
      if (dm < 180) {
        ctx.strokeStyle = 'rgba(94, 234, 212, ' + ((1 - dm / 180) * 0.7) + ')';
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.moveTo(n.x, n.y);
        ctx.lineTo(mouse.x, mouse.y);
        ctx.stroke();
      }

      ctx.fillStyle = 'rgba(94, 234, 212, 1)';
      ctx.shadowBlur = 10;
      ctx.shadowColor = 'rgba(20, 184, 166, 1)';
      ctx.beginPath();
      ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
      ctx.fill();
      ctx.shadowBlur = 0;
    });

    requestAnimationFrame(draw);
  }

  window.addEventListener('resize', resize);
  window.addEventListener('mousemove', function (e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });

  resize();
  draw();
})();